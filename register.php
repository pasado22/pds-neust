<?php
include 'php/dry.php';
include 'php/func.php';
session_start();

_header("Contact Us");
?>


<header></header>

<h1>NEUST STAFF PORTAL</h1>
<?php 
if(isset($_SESSION['msg'])){
  echo check_msg($msg = $_SESSION['msg']);
  session_unset();
}
?>
<a href="index.php">Go back</a>
<form action="php/common.php" method="GET">
  <input type="text" name="user_Fname" id="" placeholder="First Name" required>
  <input type="text" name="user_Mname" id="" placeholder="Middle Name" required>
  <input type="text" name="user_Sname" id="" placeholder="Surname" required>
  <input type="email" name="user_email" id="" placeholder="Email" required>
  <input type="password" name="user_pass" id="" placeholder="Password" required>
  <button type="submit" name="register_btn" value="Register">Register</button>
</form>


<?php _footer(2022); ?>