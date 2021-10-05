<?php
session_start();
include 'DBconnection.php';
$isbn = $_REQUEST["isbn"];
$id = $_REQUEST["id"];

$query = "select ISBN from Trxn where ISBN='$isbn' and bookstatus='I'"; 
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)>0){
   $query = "select DISTINCT(ID) from Trxn where ID=$id"; 
   $result = mysqli_query($db,$query);
   if(mysqli_num_rows($result)>0){
	$query = "select TrxnID from Trxn where ISBN='$isbn' and ID=$id and bookstatus='I'"; 
   	$result = mysqli_query($db,$query);
   	if(mysqli_num_rows($result)>0){
	   $query = "update trxn set bookstatus='R', returndate=now() where  	   ISBN='$isbn' AND ID=$id AND bookstatus='I'"; 
	   $result = mysqli_query($db,$query);
	   $_SESSION['msg']="Book Received";
	}
	else{
	   $_SESSION['msg']="Book not Issued to given member.";
	}
   }
   else{
	$_SESSION['msg']="ID not found";
   }
}
else{
   $_SESSION['msg']="ISBN not found";
}


header("Location: receivebooks.php");
die ("no such isbn is found");
?>

