<?php
require '../php/func.php';
require '../php/conn.php';
require 'adry.php';
session_start();

$admin_id = $_SESSION['admin_id'];
check_id(2, $admin_id, $conn);
get_urlmessage();

// BackEnd Code Here!
try {
    $select = $conn->prepare("SELECT * FROM `user_main_tbl`");
    $select->execute([]);
    $rows = $select->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

$arr1 = array();
foreach ($rows as $data1) {
    $arr1 = $data1;
}

echo "<h1>Home</h1>$admin_id";
_headerAdmin("Activity Log");
?>

<fieldset>
    <span>Number of Registered Users:</span>
    <strong><?= (isset($rows)) ? count($rows) : '0' ?></strong>
    <br>
    <span>Number of Verified Users:</span>
    <strong><?= (isset($arr1['main_verify'])) ? count($arr1['main_verify']) : '0' ?></strong>
</fieldset>

<table style="margin-top: 3%;">
    <thead>
        <tr>
            <th>Position</th>
            <th>Picture</th>
            <th>Name</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            
        </tr>
    </tbody>
</table>

<br><br>
<?php _footerAdmin(2022) ?>