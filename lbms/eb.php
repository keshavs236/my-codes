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
</head>
<body bgcolor="87ceeb">
<form action="InsertEditBooks.php" method="post">
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Enter Title :</td>
<td> <input type="text" name="title" size="48"> </td>
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
</body>
</html>