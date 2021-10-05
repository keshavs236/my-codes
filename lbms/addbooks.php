<?php
session_start();
ob_start();
    if($_SESSION['userid'] == session_id())
    {
        echo "welcome to you<br>";
        echo "<a href='logout.php'>Logout</a>";
    }
    else
    {
        header('location:adminlogin.php');
    }


ob_end_clean();
?>
<!DOCTYPE HTML>
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
  float: left;
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
  <li><a href="lbmenu.php">DashBoard</a></li>
  <!--<li><a href="addbooks.php">Add New Book</a></li>-->
  <li><a href="editbooks.php">Edit Book</a></li>
  <li><a href="removebooks.php">Remove Book</a></li>
  <li><a href="searchbooks.php">Search Book</a></li>
  <li><a href="issuebooks.php">Issue Book</a></li>
  <li><a href="receivebooks.php">Receive Book</a></li>
  <li style="float: right;"><a href="logout.php">Logout</a></li>
</ul>
<center><h2>Add New Book</h2></center>
<form action="InsertBooks.php" method="post">
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Enter ISBN :</td>
<td> <input type="text" name="isbn" size="48" > </td>
</tr>
<tr>
<td> Enter Title :</td>
<td> <input type="text" name="title" size="48" > </td>
</tr>
<tr>
<td> Enter Author :</td>
<td> <input type="text" name="author" size="48"> </td>
</tr>
<tr>
<td> Enter Edition :</td>
<td> <input type="text" name="edition" size="48"> </td>
</tr>
<tr>
<td> Enter Publication: </td>
<td> <input type="text" name="publication" size="48"> </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
<center>
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