<?php

function clean_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function check_msg($msg)
{
    switch ($msg) {
        case 1:
            return $msg = "<span style='color: red;'>Oops, looks like your trying to access a restricted page!</span>";
            break;
        case 2:
            return $msg = "<span style='color: green;'>You're now registered! YAY!</span>";
            break;
        default:
            session_unset();
            break;
    }
}
