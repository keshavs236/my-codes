<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<center>
<h2 align="center">Change password</h2>
<form method="post" action="checkpassword.php">
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> PASSWORD :</td>
<td> <input type="password" name="password" size="48"> </td>
</tr>
<tr>
<td> RE-PASSWORD :</td>
<td> <input type="password" name="re_password" size="48"> </td>
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