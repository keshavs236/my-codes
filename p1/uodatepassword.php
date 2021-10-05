<?php
    include 'DBconnection.php';
    $email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$pin=$_POST["pin"];
	$password=$_POST["password"];
	$repassword=$_POST["repassword"];
    session_start();
    $query = "select ID from members where email='$email' and mobile=$mobile and pin=$pin ";
    $result = mysqli_query($db,$query);
    if(!mysqli_num_rows($result)>0) 
    {
	$_SESSION['msg']="details not matched.";
	header('location:forget_password.php');
	die();
    }
    $query = "select ID from members where userid='$userid' and password='$password'"; //search with a book name in the table book_info
    $result = mysqli_query($db,$query);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0) 
    {
        $_SESSION['user_id'] = session_id();
	$_SESSION['id'] = $row["ID"];
        header('location:forget_password.php');
    }
    else
    {
	$_SESSION['msg']="Wrong password";
	header('location:forget_password.php');
	die();
    }
?>
