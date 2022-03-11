<?php
require 'php/func.php';
session_start();

_headerIndex("NUEST PORTAL - REGISTER");
?>


<header></header>

<h1>REGISTER</h1>
<a href="index.php">Go back</a>
<?php 
if(isset($_SESSION['msg'])){
  echo check_msg($msg = $_SESSION['msg']);
  unset($_SESSION['msg']);
}
?>
<form action="php/common.php" method="POST" autocomplete="off">
  <input type="text" name="user_fname" id="" placeholder="First Name" required>
  <input type="text" name="user_mname" id="" placeholder="Middle Name" required>
  <input type="text" name="user_sname" id="" placeholder="Surname" required>
  <input type="email" name="user_email" id="" placeholder="Email" required>
  <input type="password" name="user_pass" id="" placeholder="Password" required>
  <input type="text" name="user_phone" id="" placeholder="Phone Number" required>
  <button type="submit" name="register_btn" value="Register">Register</button>
</form>


<?php _footerIndex(2022); ?>