<?php
include 'DBconnection.php';
$isbn = $_REQUEST["isbn"];
session_start();
$query = "select ISBN,Title,Author,Edition,Publication from book_info where ISBN='$isbn'"; 
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)>0)
{
$row = mysqli_fetch_assoc($result);
}
else{
$_SESSION['msg']="ISBN not found";
header("Location: EditBooks.php");
die ("no such isbn is found");

}
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
<br><br>
<ul>
  <li><a href="lbmenu.php">DashBoard</a></li>
  <li><a href="addbooks.php">Add New Book</a></li>
  <li><a href="editbooks.php">Edit Book</a></li>
  <li><a href="removebooks.php">Remove Book</a></li>
  <li><a href="searchbooks.php">Search Book</a></li>
  <li><a href="issuebooks.php">Issue Book</a></li>
  <li><a href="receivebooks.php">Receive Book</a></li>
  <li style="float: right;"><a href="logout.php">Logout</a></li>
</ul>
<center><h2>Edit Details</h2></center>
<form action="InsertEditBooks.php" method="post">
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td>ISBN :</td>
<td> <input type="text" name="isbn" size="48" value="<?php echo $row["ISBN"];?>" readonly> </td>
</tr>
<tr>
<td> Enter Title :</td>
<td> <input type="text" name="title" size="48" value="<?php echo $row["Title"];?>"> </td>
</tr>
<tr>
<td> Enter Author :</td>
<td> <input type="text" name="author" size="48" value="<?php echo $row["Author"];?>"> </td>
</tr>
<tr>
<td> Enter Edition :</td>
<td> <input type="text" name="edition" size="48" value="<?php echo $row["Edition"];?>"> </td>
</tr>
<tr>
<td> Enter Publication: </td>
<td> <input type="text" name="publication" size="48" value="<?php echo $row["Publication"];?>"> </td>
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



</body>
</html>
