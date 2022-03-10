<!DOCTYPE html>
<html lang="en">
<?php
include 'php/func.php';
session_start();
?>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NEUST PORTAL</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header></header>
  <main>
    <h1>NEUST PORTAL</h1>
    <?php
    if(isset($_SESSION['msg'])){
      echo check_msg($msg = $_SESSION['msg']);
      session_unset();
    }
    ?>
    <ul>
      <li>
        <a href="register.php">Register</a>
      </li>
      <li>
        <a href="login.php">Login</a>
      </li>
      <li>
        <a href="cont-us.php">Contact Us</a>
      </li>
    </ul>
  </main>
  <footer>Copyright &copy; 2022</footer>
</body>

</html>