<?php
include '../php/func.php';
session_start();
if(empty($admin_id = $_SESSION['admin_id'])) {
    die(header("location: ../index.php"));
}


echo "</br>$admin_id";
get_urlmessage();
echo "UWU <a href='../php/logout.php'>Go back</a>";
