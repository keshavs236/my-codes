<?php
    include 'DBconnection.php';
    $userid = $_POST['user'];
    $password = $_POST['password'];
    session_start();
    $query = "select ID from members where userid='$userid'";
    $result = mysqli_query($db,$query);
    if(!mysqli_num_rows($result)>0) 
    {
	$_SESSION['msg']="Username not found.";
	header('location:login.php');
	die();
    }
    $query = "select ID from members where userid='$userid' and password='$password'"; //search with a book name in the table book_info
    $result = mysqli_query($db,$query);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0) 
    {
        $_SESSION['user_id'] = session_id();
	$_SESSION['id'] = $row["ID"];
        header('location:Display.php');
    }
    else
    {
	$_SESSION['msg']="Wrong password";
	header('location:login.php');
	die();
    }
?>
