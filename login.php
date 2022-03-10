<?php
include 'php/dry.php';
include 'php/func.php';

_header("Contact Us");
?>


<header></header>
<h1>NEUST STAFF PORTAL</h1>
<a href="index.php">Go back</a>
<form action="php/common.php" method="post">
  <input type="text" name="user_email" id="" placeholder="Email">
  <input type="password" name="user_pass" id="" placeholder="Password">
  <button type="submit" name="login_btn" value="Login">Login</button>
</form>


<?php _footer(2022); ?>