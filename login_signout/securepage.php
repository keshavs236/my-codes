<?php 
   session_start();
   if(isset($_SESSION['sid']))
   {
    echo "welcome to you ". $_SESSION['sid']."<br>";
      echo "<a href='logout.php'>Logout</a>";
   }
   else
   {
    header('Location: login.php');
   }
?>