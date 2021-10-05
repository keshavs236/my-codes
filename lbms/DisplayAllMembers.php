<!--DisplayBooks.php-->
<!DOCTYPE HTML>
<html>
<head>
</head>
<body bgcolor="87ceeb">
<br>
<?php
include 'DBconnection.php';
$search = '';
$query = "select ID,userid,password,name,email from Members"; 
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
{
?>
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<th> ID </th>
<th> UserID </th>
<!--<th> Password </th>-->
<th> Name </th>
<th> Email </th>
</tr>
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["ID"];?> </td>
<td><?php echo $row["userid"];?> </td>
<!--<td><?php echo $row["password"];?> </td>-->
<td><?php echo $row["name"];?> </td>
<td><?php echo $row["email"];?> </td>
</tr>
<?php
}
}
else
echo "<center>No members registerd </center>" ;
?>
</table>
</body>
</html>
<br>