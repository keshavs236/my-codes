<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<center>
<h2>Member Login</h2>
<form method="post" action="checklogin.php">
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> USER ID :</td>
<td> <input type="text" name="userid" size="48"> </td>
</tr>
<tr>
<td> PASSWORD :</td>
<td> <input type="password" name="password" size="48"> </td>
</tr>
<td></td>
<td>
<input type="submit" value="login">
<input type="button" onclick="window.location.href='signup.php';" value="sign up">
<input type="button" onclick="window.location.href='forget_password.php';" value="forget password?">
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