<?php
session_start();

if ($row['verify'] != true) {
    header("location: ");
} else if ($uid == false) {
    $_SESSION['msg'] = 6;
    header("location: ../index.php");
}

echo $uid = $_SESSION['uid'];
echo "UWU <a href='../index.php'>Go back</a>";
?>