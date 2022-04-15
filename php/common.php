<?php
require 'conn.php';
require 'func.php';
session_start();

// user registration
if (isset($_POST['register_btn'])) {
    $uid = bin2hex(random_bytes(11));

    $psl_user_sname = $_POST['user_sname'];
    $psl_user_fname = $_POST['user_fname'];
    $psl_user_mname = $_POST['user_mname'];
    $psl_user_bdate = $_POST['user_bday'];
    $addr_user_brgy = $_POST['user_brgy'];
    $addr_user_city = $_POST['user_city'];
    $addr_user_prov = $_POST['user_prov'];
    $main_user_email = $_POST['user_email'];
    $main_user_pass = $_POST['user_pass'];

    try {
        $conn->beginTransaction();

        $sql = "
        INSERT INTO `user_main_tbl` (`user_id`, `main_user_email`, `main_user_pass`, `main_created`) VALUES (:userid, :main_user_email, :main_user_pass, NOW());
        INSERT INTO `user_psl_tbl` (`user_id`, `psl_user_sname`, `psl_user_fname`, `psl_user_mname`, `psl_user_bdate`) VALUES (:userid, :psl_user_sname, :psl_user_fname, :psl_user_mname, :psl_user_bdate);
        INSERT INTO `user_addr_tbl` (`user_id`, `addr_user_brgy`, `addr_user_city`, `addr_user_prov`) VALUES (:userid, :addr_user_brgy, :addr_user_city, :addr_user_prov);
        ";

        $insert = $conn->prepare($sql);
        $insert->execute([
            ':userid' => $uid,
            ':main_user_email' => $main_user_email,
            ':main_user_pass' => $main_user_pass,
            ':psl_user_sname' => $psl_user_sname,
            ':psl_user_fname' => $psl_user_fname,
            ':psl_user_mname' => $psl_user_mname,
            ':psl_user_bdate' => $psl_user_bdate,
            ':addr_user_brgy' => $addr_user_brgy,
            ':addr_user_city' => $addr_user_city,
            ':addr_user_prov' => $addr_user_prov
        ]);

        $conn->commit();
    } catch (PDOException $e) {
        echo "<br>" . $e->getMessage();
    } finally {
        $conn = NULL;
    }

    // header("Location: ../index.php?success=You're registered! YAY!");
}

// login user
if (isset($_POST['login_btn'])) {
    $main_user_email = $_POST['user_email'];
    $main_user_pass = $_POST['user_pass'];

    if ("admin" == $main_user_email && "admin" == $main_user_pass) {
        header("Location: ../page_admin/login.php");
    }

    try {
        $select = $conn->prepare("SELECT * FROM `user_main_tbl` WHERE `main_user_email` = :main_user_email AND `main_user_pass` = :main_user_pass");
        $select->execute([
            ':main_user_email' => $main_user_email,
            ':main_user_pass' => $main_user_pass
        ]);
        $row = $select->fetch();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $_SESSION['user_id'] = $row['user_id'];
    header("Location: ../page_user/index.php?success=Welcome back!");
}
// $stmt = "SELECT * FROM `admin_tbl` WHERE `admin_name`='$main_user_email' AND `admin_pass`='$main_user_pass'";
// $qry = mysqli_query($conn, $stmt);
// $row = mysqli_fetch_array($qry);

// if ("admin" == $main_user_email && "admin" == $main_user_pass) {
//     $_SESSION['admin_id'] = $row['admin_id'];
//     $_SESSION['msg'] = 4;
//     header("Location: ../page_admin/index.php");
// }

// $stmt = "SELECT * FROM `user_main_tbl` WHERE `main_user_email`='$main_user_email' AND `main_user_pass`='$main_user_pass'";
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
// header("location: ../index.php?error=Oops, looks like your trying to access a restricted page!");
// die();