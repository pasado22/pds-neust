<?php
require '../php/func.php';
require '../php/conn.php';
session_start();

$user_id = $_SESSION['user_id'];
check_id(1, $user_id, $conn);

get_urlmessage();
echo "</br>$user_id
        </br><a href='../php/logout.php'>Logout</a>
        </br><strong><a href='pds.php'>PDS</a></strong>";
?>