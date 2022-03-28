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
  <input type="email" name="user_email" id="" placeholder="Email" maxlength="50" required>
  <input type="password" name="user_pass" id="" placeholder="Password" maxlength="24" required>
  <input type="text" name="user_phone" id="" placeholder="Phone Number" maxlength="24" required>
  <button type="submit" name="register_btn" value="Register">Register</button>
</form>


<?php _footerIndex(2022); ?>