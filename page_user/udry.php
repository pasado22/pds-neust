<?php
function _userheader($title)
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
    <a href='uindex.php'>Home</a>
    <br><a href='pds-view.php'>PDS</a>
    <br><a href='../php/logout.php'>Logout</a>
    ";
}

function _userfooter($date)
{
    echo "
    <footer>Copyright &copy; $date</footer>
    </body>
    </html>
    ";
}
?>