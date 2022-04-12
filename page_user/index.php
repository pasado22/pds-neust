<?php
include '../php/func.php';
session_start();
$user_id = $_SESSION['user_id'];

// if ($verify == false) {
//     header("location: pds.php");
// } else if ($uid != true) {
//     $_SESSION['msg'] = 6;
//     die(header("location: ../index.php"));
// }

get_urlmessage();
echo "</br>$user_id";
echo "</br><a href='../php/logout.php'>Logout</a>";
echo "</br><strong><a href='../php/pds.php'>PDS</a></strong>";
?>