<?php
require 'conn.php';
require 'func.php';
session_start();

// user registration
if (isset($_POST['register_btn'])) {
    $u_id = bin2hex(random_bytes(11));
    $user_email = $_POST['user_email'];
    $user_pass = $_POST['user_pass'];
    $user_phone = $_POST['user_phone'];

    clean_data($user_email, $user_pass, $user_phone);

    try {
        $insert = $conn->prepare("INSERT INTO `user_main_tbl` (`user_id`, `user_email`, `user_pass`, `user_phone`, `created`) 
        VALUES (:u_id, :user_email, :user_pass, :user_phone, NOW())");
        $insert->execute([
            'u_id' => $u_id,
            ':user_email' => $user_email,
            ':user_pass' => $user_pass,
            ':user_phone' => $user_phone
        ]);
    } catch (PDOException $e) {
        echo "<br>" . $e->getMessage();
    } finally {
        $conn = NULL;
    }

    $_SESSION['msg'] = 2;
    header("Location: ../index.php");
}

// login user
if (isset($_POST['login_btn'])) {
    $user_email = $_POST['user_email'];
    $user_pass = $_POST['user_pass'];

    clean_data($user_email, $user_pass);

    if ("admin" == $user_email && "admin" == $user_pass) {
        header("Location: ../page_admin/login.php");
    }

    try {
        $select = $conn->prepare("SELECT * FROM `user_main_tbl` WHERE `user_email` = :user_email AND `user_pass` = :user_pass");
        $select->execute([
            ':user_email' => $user_email,
            ':user_pass' => $user_pass
        ]);
        $row = $select->fetch();
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

    $_SESSION['uid'] = $row['user_id'];
    $_SESSION['vrfy'] = $row['verify'];
    $_SESSION['msg'] = 4;
    header("Location: ../page_user/index.php");
}
    // $stmt = "SELECT * FROM `admin_tbl` WHERE `admin_name`='$user_email' AND `admin_pass`='$user_pass'";
    // $qry = mysqli_query($conn, $stmt);
    // $row = mysqli_fetch_array($qry);

    // if ("admin" == $user_email && "admin" == $user_pass) {
    //     $_SESSION['admin_id'] = $row['admin_id'];
    //     $_SESSION['msg'] = 4;
    //     header("Location: ../page_admin/index.php");
    // }

    // $stmt = "SELECT * FROM `user_main_tbl` WHERE `user_email`='$user_email' AND `user_pass`='$user_pass'";
    // $qry = mysqli_query($conn, $stmt);
    // $row = mysqli_fetch_array($qry);

    // if (mysqli_num_rows($qry) == 1) {
    //     $_SESSION['uid'] = $row['user_id'];
    //     header("Location: ../page_user/index.php");
    // }


// login admin
if (isset($_POST['login_admin'])) {
}


// redirect unauthorized access
