<?php
require '../php/func.php';
require '../php/conn.php';
require 'adry.php';
session_start();

$aID = $_SESSION['admin_id'];
check_id(2, $aID, $conn);
get_urlmessage();


echo "</br>$aID";
 //  </br>UWU <a href='../php/logout.php'>Logout</a>";

_headerAdmin("Home");
?>

<h1>Home</h1>




<?php _footerAdmin(2022) ?>
