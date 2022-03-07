<?php
require 'conn.php';
require 'clean.php';
session_start();

// staff registration
if(isset($_POST['register_btn'])){
    $bytes = random_bytes(20);
    $user_id = var_dump(bin2hex($bytes));
    $user_Fname = mysqli_escape_string($conn, $_GET['user_fname']);
    $user_Mname = mysqli_escape_string($conn, $_GET['user_mname']);
    $user_Sname = mysqli_escape_string($conn, $_GET['user_sname']);
    $user_email = mysqli_escape_string($conn, $_GET['user_email']);
    $user_passw = mysqli_escape_string($conn, $_GET['user_passw']);
    clean_data($user_Fname, $user_Mname, $user_Sname, $user_email, $user_passw);

    $stmt = "INSERT INTO `user_main_tbl` (`user_id`, `user_Fname`, `user_Mname`, `user_Sname`, `user_email`, `user_passw`) 
            VALUES (NULL, '$user_Fname', '$user_Mname', '$user_Sname', '$user_email', '$user_passw')";
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

// staff and admin login
} else if (isset($_POST['login_btn'])) {
    $user_email = mysqli_escape_string($conn, $_POST['user_email']);
    $user_passw = mysqli_escape_string($conn, $_POST['user_pass']);
    clean_data($user_email, $user_passw);

    if("admin" === $user_email && "admin" === $user_passw){
        $_SESSION['admin_id'] = "a1ID";
        header("Location: ../page_admin/index.php");
    // } else if ($user_email) {

    } else {

    }
    

    echo "rawr";
} else {
    $_SESSION['msg'] = 1;
    header("Location: ../index.php");
}
