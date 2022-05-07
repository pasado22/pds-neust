<?php
include '../php/func.php';
session_start();
if(empty($admin_id = $_SESSION['admin_id'])) {
    die(header("location: ../index.php"));
}

get_urlmessage();

echo "</br>$admin_id";
echo "</br>UWU <a href='../php/logout.php'>Logout</a>";
