<!--DisplayBooks.php-->
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
  <!--<li><a href="addbooks.php">Add New Book</a></li>-->
  <li><a href="editbooks.php">Edit Book</a></li>
  <li><a href="removebooks.php">Remove Book</a></li>
  <li><a href="searchbooks.php">Search Book</a></li>
  <li><a href="issuebooks.php">Issue Book</a></li>
  <li><a href="receivebooks.php">Receive Book</a></li>
  <li style="float: right;"><a href="logout.php">Logout</a></li>
</ul>
<center><h2>Search list</h2></center>
<?php
include 'DBconnection.php';
$search = $_REQUEST["search"];
$query = "select ISBN,Title,Author,Edition,Publication from book_info where title like '%$search%'"; //search with a book name in the table book_info
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
{
?>
 
<table border="2" align="center" cellpadding="5" cellspacing="5">
 
<tr>
<th> ISBN </th>
<th> Title </th>
<th> Author </th>
<th> Edition </th>
<th> Publication </th>
</tr>
 
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["ISBN"];?> </td>
<td><?php echo $row["Title"];?> </td>
<td><?php echo $row["Author"];?> </td>
<td><?php echo $row["Edition"];?> </td>
<td><?php echo $row["Publication"];?> </td>
</tr>
<?php
}
}
else
echo "<center>No books found in the library by the name $search </center>" ;
?>
</table>
</body>
</html>
<br>