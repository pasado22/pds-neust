<?php
require '../php/func.php';
require '../php/conn.php';
require 'udry.php';
session_start();

$user_id = $_SESSION['user_id'];
check_id(1, $user_id, $conn);

get_urlmessage();

echo "<h1>HOME</h1>
        $user_id<br>";
_userheader("Home");
?>


<?php _userfooter(2022) ?>