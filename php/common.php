<?php
require 'conn.php';
require 'func.php';
session_start();

// staff registration
if (isset($_POST['register_btn'])) {
    $user_id = bin2hex(random_bytes(11));
    $user_fname = mysqli_escape_string($conn, $_POST['user_fname']);
    $user_mname = mysqli_escape_string($conn, $_POST['user_mname']);
    $user_sname = mysqli_escape_string($conn, $_POST['user_sname']);
    $user_email = mysqli_escape_string($conn, $_POST['user_email']);
    $user_pass = mysqli_escape_string($conn, $_POST['user_pass']);
    $user_phone = mysqli_escape_string($conn, $_POST['user_phone']);
    clean_data($user_fname, $user_mname, $user_sname, $user_email, $user_pass, $user_phone);

    $stmt = "INSERT INTO `user_main_tbl` (`user_id`, `user_fname`, `user_mname`, `user_sname`, `user_email`, `user_pass`, `user_phone`, `created`, `modfied`) 
            VALUES ('$user_id', '$user_fname', '$user_mname', '$user_sname', '$user_email', '$user_pass', '$user_phone', NOW(), NULL)";
    $qry = mysqli_query($conn, $stmt);

    if ($qry != false) {
        $_SESSION['msg'] = 2;
        header("Location: ../register.php");
    } else if ($qry == false) {
        die("Error: " . mysqli_error($conn) . " $stmt");
    } else {
        $_SESSION['msg'] = 1;
        header("Location: ../register.php");
    };
}

if (isset($_POST['login_btn'])) {
    $user_email = mysqli_escape_string($conn, $_POST['user_email']);
    $user_pass = mysqli_escape_string($conn, $_POST['user_pass']);
    clean_data($user_email, $user_pass);

    if ("admin" === $user_email && "admin" === $user_pass) {
        $_SESSION['admin_id'] = "a1ID";
        header("Location: ../page_admin/index.php");
    }

    $stmt = "SELECT * FROM `user_main_tbl` WHERE `user_email`='$user_email' AND `user_pass`='$user_pass'";
    $qry = mysqli_query($conn, $stmt);
    $row = mysqli_fetch_array($qry);

    if (mysqli_num_rows($qry) == 1) {
        $_SESSION['uid'] = $row['user_id'];
        header("Location: ../page_user/index.php");
    } else {
        $_SESSION['msg'] = 2;
        header("Location: ../page_admin/index.php");
    }

    $_SESSION['msg'] = 1;
    header("Location: ../register.php");
}
