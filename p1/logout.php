<?php 
    session_start();
    if(!session_destroy())
    {
        echo "Failed to log out";
    }
    else
    {
        echo "Logged out successfully";
	header("Location: login.php");
	die ();
    }
?>
<!DOCTYPE html>
<html>
<body>
</body>
</html>