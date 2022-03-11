<?php
require '../php/func.php';

if(isset($_SESSION['msg'])){
    echo $_SESSION['admin_id'];
    echo check_msg($msg = $_SESSION['msg']);
    unset($_SESSION['msg']);
}

echo "UWU <a href='../index.php'>Go back</a>";
