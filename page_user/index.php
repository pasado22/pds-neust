<?php
session_start();
$uid = $_SESSION['uid'];
$verify = $_SESSION['vrfy'];

if ($verify == false) {
    header("location: pds.php");
} else if ($uid != true) {
    $_SESSION['msg'] = 6;
    die(header("location: ../index.php"));
}

echo $uid . " " . + $verify;
echo "</br>UWU <a href='../php/logout.php'>Logout</a>";
?>