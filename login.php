<?php
include 'php/dry.php';
include 'php/func.php';

_header("NEUST PORTAL - LOGIN");
?>


<header></header>
<h1>LOGIN</h1>
<a href="index.php">Go back</a>
<form action="php/common.php" method="post" autocomplete="off">
  <input type="text" name="user_email" id="" placeholder="Email">
  <input type="password" name="user_pass" id="" placeholder="Password">
  <button type="submit" name="login_btn" value="Login">Login</button>
</form>


<?php _footer(2022); ?>