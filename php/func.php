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

function generate_string($strength = 16) {
    $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}