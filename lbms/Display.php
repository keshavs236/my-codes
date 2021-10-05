<?php
session_start();
ob_start();
    if($_SESSION['user_id'] == session_id())
    {
        echo "welcome to you".$_SESSION['user_id'];
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
<br><br>
<ul>
  <!--<li><a href="addbooks.php">Add New Book</a></li>-->
  <li style="float: right;"><a href="logout.php">Logout</a></li>
</ul>
<center><h2>My Transaction Book Status</h2></center>
<?php
include 'DBconnection.php';
$id=$_SESSION['id'];
$query ="select T.ISBN, B.Title, T.ID, T.Bookstatus, T.issuedate, T.returndate from book_info B, trxn T, members M where B.ISBN=T.ISBN AND T.ID=M.ID AND T.ID=$id";

$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)>0)
{
?>
 
<table border="2" align="center" cellpadding="5" cellspacing="5">
 
<tr>
<th> ISBN </th>
<th> Title </th>
<th> ID </th>
<th> Bookstatus </th>
<th> Issue Date </th>
<th> Return Date </th>
</tr>
 
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["ISBN"];?> </td>
<td><?php echo $row["Title"];?> </td>
<td><?php echo $row["ID"];?> </td>
<td><?php echo $row["Bookstatus"];?> </td>
<td><?php echo $row["issuedate"];?> </td>
<td><?php echo $row["returndate"];?> </td>

</tr>
<?php
}
}
else
echo "<center><b>No issued books found </b></center>" ;
?>
</table>
</body>
</html>
<br>