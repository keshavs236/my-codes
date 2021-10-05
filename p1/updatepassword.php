<?php
    include 'DBconnection.php';
    $email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$pincode=$_POST["pincode"];
	$password=$_POST["password"];
	$repassword=$_POST["repassword"];
    session_start();
    $query = "select * from members where Email='$email' and Mobile=$mobile and Pincode=$pincode ";
    $result = mysqli_query($db,$query);
    if(!mysqli_num_rows($result)>0) 
    {
	$_SESSION['msg']="details not matched.";
	header('location:forget_password.php');
	die();
    }
	if($password==$repassword){
    $query = "update members set Password='$password' where Email='$email' and Mobile=$mobile and Pincode=$pincode"; //search with a book name in the table book_info
    $result = mysqli_query($db,$query);
    $row = mysqli_fetch_assoc($result);
	$_SESSION['msg']="password changed successfully";
	} else {
		$_SESSION['msg']="match the password";
	}
	header('location:forget_password.php');
?>
