<?php
session_destroy();
unset($_SESSION['uid']);
unset($_SESSION['aid']);
header('location: ../index.php');
?>