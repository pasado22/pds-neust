<?php
require '../php/func.php';
require '../php/conn.php';
session_start();

$admin_id = $_SESSION['admin_id'];

check_id(2, $user_id, $conn);
get_urlmessage();

echo "</br>$admin_id
        </br>UWU <a href='../php/logout.php'>Logout</a>";

