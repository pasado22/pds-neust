<?php
require '../php/func.php';
require '../php/conn.php';
require 'adry.php';
session_start();

$aID = $_SESSION['admin_id'];
check_id(2, $aID, $conn);
get_urlmessage();

// BackEnd Code Here!
try {
    $sql = "
    SELECT * FROM `user_main_tbl`;
    ";

    $select = $conn->prepare($sql);
} catch (PDOException $e) {
    echo $e->getMessage();
}

echo "</br>$aID";
 //  </br>UWU <a href='../php/logout.php'>Logout</a>";

_headerAdmin("Activity Log");
?>


<h1>User List</h1>

<table>
    <thead>
        <tr>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
        </tr>
    </tbody>
</table>


<?php _footerAdmin(2022) ?>