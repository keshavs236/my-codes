<?php
include 'DBconnection.php';
$name=$_POST["name"];
$userid=$_POST["userid"];
$password=$_POST["password"];
$email=$_POST["email"];
session_start();
if(strlen($name)<3) 
    {
	$_SESSION['msg']="NAME is too short.";
	header('location:signup.php');
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
$query = "insert into members(name,userid,password,email) values('$name','$userid','$password','$email')"; //Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);
$_SESSION['msg']="SignUp Successful";
header("Location: login.php");
die();
?>
<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">

</body>
</html>