<?php
require 'php/func.php';
session_start();

_headerIndex("NEUST PORTAL - LOGIN");
?>


<header></header>
<h1>LOGIN</h1>
<a href="index.php">Go back</a>
<?php 
if(isset($_SESSION['msg'])){
  echo check_msg($msg = $_SESSION['msg']);
  unset($_SESSION['msg']);
}
?>
<form action="php/common.php" method="post" autocomplete="off">
  <input type="text" name="user_email" id="" placeholder="Email">
  <input type="password" name="user_pass" id="" placeholder="Password">
  <button type="submit" name="login_btn" value="Login">Login</button>
</form>


<?php _footerIndex(2022); ?>