<?php 
    session_start();
    if(!session_destroy())
    {
        echo "Failed to log out";
    }
    else
    {
        echo "Logged out successfully";
	header("Location: home.php");
	die ();
    }
?>
<!DOCTYPE html>
<html>
<body bgcolor="87ceeb">
</body>
</html>