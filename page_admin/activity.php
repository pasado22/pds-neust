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
    $select = $conn->prepare("SELECT * FROM `activity_log`");
    $select->execute([]);
    $rows = $select->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

echo "</br>$admin_id";
_headerAdmin("Activity Log");
?>


<h1>Activity Log</h1>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Text</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($rows) {
            foreach ($rows as $data1) {
                $arr1 = array();
                $arr1 = $data1;
                $i =+ 1;
                echo    "<tr>" .
                        "<td>" . $i . "</td>" .
                        "<td>" . $arr1["act_text"] . "</td>" .
                        "<td>" . $newDateTime = date('M d, Y - h:i A', strtotime($arr1["act_time"])) . "</td>" .
                        "</tr>";
            }
        } else {
            echo "The table is empty!";
        }
        ?>
    </tbody>
</table>

<br><br>
<?php _footerAdmin(2022) ?>