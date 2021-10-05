<?php
include 'DBconnection.php';
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$Mobile=$_POST["Mobile"];
$City=$_POST["City"];
$Age=$_POST["Age"];
session_start();
if(strlen($Name)<3) 
    {
	$_SESSION['msg']="Name is too short.";
	header('location:form1.php');
	die();
    }
$query = "insert into form_info(Name,Email,Mobile,City,Age) values('$Name','$Email','$Mobile','$City','$Age')"; //Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);
$_SESSION['msg']="New Book Added Successfully";
header("Location: form1.php");
die();
?>
<!DOCTYPE HTML>
<html>
<body>
</body>
</html>