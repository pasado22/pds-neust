<?php
require '../php/func.php';
session_start();

_headerIndex("ADMIN - LOGIN");
?>


<header></header>
<h1>ADMIN - LOGIN</h1>
<a href="../index.php">Go back</a>
<?php
get_urlmessage();
?>
<form action="php/common.php" method="post" autocomplete="off">
  <input type="text" name="admin_name" id="" placeholder="Name">
  <input type="password" name="admin_pass" id="" placeholder="Password">
  <button type="submit" name="login_admin" value="Login">Login</button>
</form>


<?php _footerIndex(2022); ?>