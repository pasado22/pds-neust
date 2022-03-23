<?php
require 'conn.php';
require 'func.php';
session_start();

// user registration
if (isset($_POST['register_btn'])) {
    $u_id = bin2hex(random_bytes(11));
    $user_fname = $_POST['user_fname'];
    $user_mname = $_POST['user_mname'];
    $user_sname = $_POST['user_sname'];
    $user_email = $_POST['user_email'];
    $user_pass = $_POST['user_pass'];
    $user_phone = $_POST['user_phone'];

    clean_data($user_fname, $user_mname, $user_sname, $user_email, $user_pass, $user_phone);

    try {
        $insert = $conn->prepare("INSERT INTO `user_main_tbl` (`user_id`, `user_fname`, `user_mname`, `user_sname`, `user_email`, `user_pass`, `user_phone`, `created`, `modified`) 
        VALUES (:u_id, :user_fname, :user_mname, :user_sname, :user_email, :user_pass, :user_phone, NOW(), NULL)");
        $insert->execute([
            'u_id' => $u_id,
            ':user_fname' => $user_fname,
            ':user_mname' => $user_mname,
            ':user_sname' => $user_sname,
            ':user_email' => $user_email,
            ':user_pass' => $user_pass,
            ':user_phone' => $user_phone
        ]);
    } catch (PDOException $e) {
        echo $insert . "<br>" . $e->getMessage();
    } finally {
        $insert = NULL; $conn = NULL;
    }
    $_SESSION['msg'] = 2;
    header("Location: ../index.php");
}

// login
// if (isset($_POST['login_btn'])) {
//     $user_email = $_POST['user_email'];
//     $user_pass = $_POST['user_pass'];
//     clean_data($user_email, $user_pass);

//     $stmt = "SELECT * FROM `admin_tbl` WHERE `admin_name`='$user_email' AND `admin_pass`='$user_pass'";
//     $qry = mysqli_query($conn, $stmt);
//     $row = mysqli_fetch_array($qry);

//     if ("admin" == $user_email && "admin" == $user_pass) {
//         $_SESSION['admin_id'] = $row['admin_id'];
//         $_SESSION['msg'] = 4;
//         header("Location: ../page_admin/index.php");
//     }

//     $stmt = "SELECT * FROM `user_main_tbl` WHERE `user_email`='$user_email' AND `user_pass`='$user_pass'";
//     $qry = mysqli_query($conn, $stmt);
//     $row = mysqli_fetch_array($qry);

//     if (mysqli_num_rows($qry) == 1) {
//         $_SESSION['uid'] = $row['user_id'];
//         header("Location: ../page_user/index.php");
//     }
// }


// redirect unauthorized access

