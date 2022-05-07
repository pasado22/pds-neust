<?php
session_destroy();
unset($_SESSION['user_id']);
unset($_SESSION['admin_id']);
header('location: ../index.php');
?>