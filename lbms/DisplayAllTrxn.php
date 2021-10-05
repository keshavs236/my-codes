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
$query = "select trxnid,isbn,ID,bookstatus,issuedate,returndate from trxn where bookstatus='I'"; 
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)>0)
{
?>
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<th> TrxnID </th>
<th> ISBN </th>
<th> ID </th>
<th> BookStatus </th>
<th> IssueDate </th>
<th> ReturnDate </th>
</tr>
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["trxnid"];?> </td>
<td><?php echo $row["isbn"];?> </td>
<td><?php echo $row["ID"];?> </td>
<td><?php echo $row["bookstatus"];?> </td>
<td><?php echo $row["issuedate"];?> </td>
<td><?php echo $row["returndate"];?> </td>
</tr>
<?php
}
}
else
echo "<center>No Issued Books left </center>" ;
?>
</table>
</body>
</html>
<br>