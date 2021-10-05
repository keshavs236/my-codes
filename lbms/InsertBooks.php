<?php
include 'DBconnection.php';
$isbn=$_POST["isbn"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];
session_start();
if(strlen($isbn)<3) 
    {
	$_SESSION['msg']="ISBN is too short.";
	header('location:addbooks.php');
	die();
    }
if(strlen($title)<3) 
    {
	$_SESSION['msg']="Title is too short.";
	header('location:addbooks.php');
	die();
    }
$query = "insert into book_info(isbn,title,author,edition,publication) values('$isbn','$title','$author','$edition','$publication')"; //Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);
$_SESSION['msg']="New Book Added Successfully";
header("Location: addbooks.php");
die();
?>
<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Simple Library Management System</h2></center>
</body>
</html>