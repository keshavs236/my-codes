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
<?php

?>
<br><br>
<ul>
  <li><a href="lbmenu.php">DashBoard</a></li>
  <li><a href="addbooks.php">Add New Book</a></li>
  <li><a href="editbooks.php">Edit Book</a></li>
  <!--<li><a href="removebooks.php">Remove Book</a></li>-->
  <li><a href="searchbooks.php">Search Book</a></li>
  <li><a href="issuebooks.php">Issue Book</a></li>
  <li><a href="receivebooks.php">Receive Book</a></li>
  <li style="float: right;"><a href="logout.php">Logout</a></li>
</ul>
<center><h2>Remove Book</h2></center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
$isbn = '';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $isbn = test_input($_POST["isbn"]);
}
function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
$db = new mysqli("localhost", "root", "", "books");
$sql = "select ISBN from book_info where ISBN='$isbn'";
$res = mysqli_query($db,$sql);
$query = "delete from book_info where ISBN='$isbn'";
$result = mysqli_query($db,$query);

if(mysqli_num_rows($res)>0)
$_SESSION['msg']="Book removed successfully ";
else
$_SESSION['msg']="ISBN not found";

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
<br>
</body>
</html>