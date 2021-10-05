<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2 align="center">forget password</h2>
<form method="post" action="updatepassword.php">
<table border="2" align="center" cellpadding="5" cellspacing="5">
<td> E-MAIL :</td>
<td> <input type="email" name="email" size="48"> </td>
</tr>
<tr>
<td> MOBILE :</td>
<td> <input type="number" name="mobile" size="48"> </td>
</tr>
<tr>
<td> PIN :</td>
<td> <input type="number" name="pincode" size="48"> </td>
</tr>
<tr>
<td> PASSWORD :</td>
<td> <input type="password" name="password" size="48"> </td>
</tr>
<tr>
<td> RE-PASSWORD :</td>
<td> <input type="password" name="repassword" size="48"> </td>
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