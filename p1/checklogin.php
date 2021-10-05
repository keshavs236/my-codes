<?php
    include 'DBConnection.php';
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    session_start();
    $query = "select * from members where Userid='$userid';";
    $result = mysqli_query($db,$query);
    if(!mysqli_num_rows($result)>0) 
    {
	$_SESSION['msg']="Username not found.";
	header('location:login.php');
	die();
    }
    $query = "select * from members where Userid='$userid' and Password='$password';"; 
    $result = mysqli_query($db,$query);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0) 
    {
        $_SESSION['userid'] = session_id();
	$_SESSION['id'] = $row["Userid"];
        header('location:form1.php');
    }
    else
    {
	$_SESSION['msg']="Wrong password";
	header('location:login.php');
	die();
    }
?>
