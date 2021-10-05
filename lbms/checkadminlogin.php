<?php 
    $user = $_POST['user'];
    $password = $_POST['password'];
    session_start();
    if($user == 'admin')
    {
	if($password == 'admin123')
        {
            $_SESSION['userid'] = session_id();
            header('location:lbmenu.php');
	    die();
	}
	else
	{
	    $_SESSION['msg']="Wrong password";
	    header('location:adminlogin.php');
	    die();
	}
    }
    else
    {
	$_SESSION['msg']="Username not found.";
	header('location:adminlogin.php');
	die();
    }
?>