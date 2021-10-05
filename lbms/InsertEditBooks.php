<?php
include "DBconnection.php";
$isbn=$_POST["isbn"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];
session_start();
$query = "update book_info SET Title='$title', Author='$author', Edition=$edition, Publication='$publication' where ISBN='$isbn'";
$result = mysqli_query($db,$query);
if($result)
$_SESSION['msg']="Book information edited successfully ";
header("Location: EditBooks.php");
die();
?>
<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb"> 
</body>
</html>