<?php
ob_start();
require 'dbtable.php';
ob_end_clean();
?>
<!DOCTYPE html>
<html>
<head>
<style>
ul {
  text-align: right;
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333333;
}
li {
  float: right;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px;
  text-decoration: none;
}
li a:hover {
  background-color: #111111;
}
</style>
</head>
<body bgcolor="87ceeb">
<!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
<br><br>
<ul>
  <!--<li style="float: left;"><a href="home.php">Home</a></li>-->
  <li><a href="signup.php">Member Sign Up</a></li>
  <li><a href="login.php">Member Login</a></li>
  <li><a href="adminlogin.php">Admin Login</a></li>
  <!--<li style="float: right;"><a href="logout.php">Logout</a></li>-->
</ul>
<center>
<h2>Simple Library Management System</h2>
</center>
</body>
</html>