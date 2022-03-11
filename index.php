<?php
include 'php/func.php';
session_start();

_headerIndex("NEUST PORTAL - HOME");
?>


<header></header>
<main>
  <h1>NEUST PORTAL</h1>
  <?php
  if (isset($_SESSION['msg'])) {
    echo check_msg($msg = $_SESSION['msg']);
    unset($_SESSION['msg']);
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
      <a href="#UwU">Contact Us</a>
    </li>
  </ul>
</main>


<?php _footerIndex(2022); ?>