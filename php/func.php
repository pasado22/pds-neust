<?php
function _headerIndex($title)
{
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
      <meta charset='UTF-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <title>$title</title>
    </head>
    <body>
    ";
}

function _footerIndex($date)
{
    echo "
    <footer>Copyright &copy; $date</footer>
    </body>
    </html>
    ";
}

// // Depricated
// function clean_data($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

function get_urlmessage()
{
    if (isset($_GET['error'])) {
        $url_msg = $_GET['error'];
        echo "<span style='color: red'>$url_msg</span>";
    } else if (isset($_GET['success'])) {
        $url_smg = $_GET['success'];
        echo "<span style='color: green'>$url_smg</span>";
    } else {
        unset($url_msg);
    }
}

// prototype
function multi_insert($uid)
{
    require 'conn.php';

    try {
        $data = []; //an array
        $conn->beginTransaction();
        $insert = $conn->prepare("INSERT INTO `table` (`col`, `col2`, `col3`) VALUES (?,?,?)");
        for ($i = 0; $i < count($data); $i++) {
            $insert->execute($data[$i]);
        }
        $conn->commit();



        while($i!=count($table)){
            $table = ['user_card_tbl', 'user_educbg'];
            $insert = $conn->prepare("INSERT INTO `$table` (`user_id`) VALUES ('$uid')");

            
            $i++;
        }
    } catch (PDOException $e) {
        echo "<strong>" . $e->getMessage() . "</strong>";
    } finally {
        $conn = NULL;
    }
}
