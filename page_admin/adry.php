<?php
function _headerAdmin($title)
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

    <header>
    <nav>
        <a href='ahome.php'>Home</a>
        <a href='activity.php'>Activity Log</a>
        <a href='userlist.php'>User List</a>
        <a href='../php/logout.php'>Logout</a>
    </nav>
</header>
    ";
}

function _footerAdmin($date)
{
  echo "
    <footer>Copyright &copy; $date</footer>
    </body>
    </html>
    ";
}

function _headerDefaultAdmin($title)
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

function _footerDefaultAdmin($date)
{
  echo "
    <footer>Copyright &copy; $date</footer>
    </body>
    </html>
    ";
}
