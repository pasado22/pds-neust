<?php
require 'php/conn.php';
require 'php/func.php';
session_start();

$uid = bin2hex(random_bytes(11));

try {
    $conn->beginTransaction();

    

    $sql = "
        INSERT INTO `user_lnd_tbl` (`user_id`) VALUES (:userid);
        
        ";

    $insert = $conn->prepare($sql);
    $insert->execute([
        ':userid' => $uid,
    ]);

    $conn->commit();
} catch (PDOException $e) {
    echo "<br>" . $e->getMessage();
} finally {
    $conn = NULL;
}

    // header("Location: ../index.php?success=You're registered! YAY!");