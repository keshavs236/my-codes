<?php
include 'DBconnection.php';
$isbn = $_REQUEST["isbn"];
$id = $_REQUEST["id"];
session_start();
$query = "select ISBN from book_info where ISBN='$isbn'"; 
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)>0){
   $query = "select DISTINCT(ID) from Members where ID=$id"; 
   $result = mysqli_query($db,$query);
   if(mysqli_num_rows($result)>0){
	$query = "select isbn from trxn where isbn='$isbn' AND bookstatus='I'"; 
	$result = mysqli_query($db,$query);
	if(!mysqli_num_rows($result)>0){
	   $query = "insert into trxn(isbn,id,issuedate,returndate) values('$isbn',$id,now(),adddate(now(),7))"; 
	$result = mysqli_query($db,$query);
	$_SESSION['msg']="Book Issued";
	}
	else{
	   $_SESSION['msg']="Book not present. Already Issued";
	}
   }
   else{
	$_SESSION['msg']="ID not found";
   }
}
else{
   $_SESSION['msg']="ISBN not found";
}
header("Location: issuebooks.php");
die ("no such isbn is found");
?>

