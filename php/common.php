<?php
require 'conn.php';
require 'clean.php';
session_start();


if(isset($_GET['register_btn'])){
    $user_Fname = mysqli_escape_string($conn, $_GET['user_Fname']);
    $user_Mname = mysqli_escape_string($conn, $_GET['user_Mname']);
    $user_Sname = mysqli_escape_string($conn, $_GET['user_Sname']);
    $user_email = mysqli_escape_string($conn, $_GET['user_email']);
    $user_pass = mysqli_escape_string($conn, $_GET['user_pass']);
    clean_data($user_Fname, $user_Mname, $user_Sname, $user_email, $user_pass);

    $stmt = "INSERT INTO `user_main_tbl` (`user_id`, `user_Fname`, `user_Mname`, `user_Sname`, `user_email`, `user_pass`) 
            VALUES (NULL, '$user_Fname', '$user_Mname', '$user_Sname', '$user_email', '$user_pass')";
    $qry = mysqli_query($conn, $stmt);

    if ($qry != false) {
        $_SESSION['msg'] = 2;
        header("Location: ../register.php");
    } else if ($qry == false) {
        die("Error: ".mysqli_error($conn)." $stmt");
    } else {
        $_SESSION['msg'] = 1;
        header("Location: ../register.php");
    };

} else if (isset($_POST['login_btn'])) {
    $user_email = mysqli_escape_string($conn, $_POST['user_email']);
    $user_pass = mysqli_escape_string($conn, $_POST['user_pass']);
    clean_data($user_email, $user_pass);

    if("admin" === $user_email && "admin" === $user_pass){
        $_SESSION['admin_id'] = "a1ID";
        header("Location: ../page_admin/index.php");
    } else if ($user_email) {

    } else {

    }
    

    echo "rawr";
} else {
    $_SESSION['msg'] = 1;
    header("Location: ../index.php");
}
