<?php
session_start();
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
  <li style="float: left;"><a href="home.php">Home</a></li>
  <li><a href="signup.php">Member Sign Up</a></li>
  <!--<li><a href="login.php">Member Login</a></li>-->
  <li><a href="adminlogin.php">Admin Login</a></li>
  <!--<li style="float: right;"><a href="logout.php">Logout</a></li>-->
</ul>
<center>
<h2>Member Login</h2>
<form method="post" action="checklogin.php">
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> USER ID :</td>
<td> <input type="text" name="user" size="48"> </td>
</tr>
<tr>
<td> PASSWORD :</td>
<td> <input type="password" name="password" size="48"> </td>
</tr>
<td></td>
<td>
<input type="submit" value="submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
<?php
if (isset($_SESSION['msg']))
{
    echo '*'.$_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
</center>
</body>
</html>