<?php
include 'DBconnection.php';
$password=$_POST["password"];
$re_password=$_POST["re_password"];
session_start();
if($password!=$re_password) 
    {
	$_SESSION['msg']="password doesn't match";
	header('location:change_password.php');
	die();
    }
    $query = "select ID from members where userid='$userid'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0) 
    {
	$_SESSION['msg']="Username already Exists.";
	header('location:signup.php');
	die();
    }
$query = "insert into members(name,userid,password,email,mobile,pin) values('$name','$userid','$password','$email',mobile,pin)"; //Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);
$_SESSION['msg']="SignUp Successful";
header("Location: login.php");
die();
?>
<!DOCTYPE HTML>
<html>
<body>
</body>
</html>