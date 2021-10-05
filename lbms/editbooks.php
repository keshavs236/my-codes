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
<html><head>
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
<br><br>
<ul>
  <li><a href="lbmenu.php">DashBoard</a></li>
  <li><a href="addbooks.php">Add New Book</a></li>
  <!--<li><a href="editbooks.php">Edit Book</a></li>-->
  <li><a href="removebooks.php">Remove Book</a></li>
  <li><a href="searchbooks.php">Search Book</a></li>
  <li><a href="issuebooks.php">Issue Book</a></li>
  <li><a href="receivebooks.php">Receive Book</a></li>
  <li style="float: right;"><a href="logout.php">Logout</a></li>
</ul>
<center><h2>Edit Book</h2></center>
<form action = "EditBookDetails.php" method="get">
<center><table align="center" cellpadding="5" cellspacing="5">
<tr>
<td> ISBN :</td>
<td> <input type="text" name="isbn" size="30"> </td>
</tr>
</table>
<input type="submit" value="submit">
<input type="reset" value="Reset">
</form>
<?php
if (isset($_SESSION['msg']))
{
    echo '<br>*'.$_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
</center>
<?php
include 'DisplayAllBooks.php';
?>
</body>
</html>