<?php
include 'DBconnection.php'; 
$Name=$_POST["Name"]; 
$Email=$_POST["Email"];
$Mobile=$_POST["Mobile"];
$City=$_POST["City"];
$Age=$_POST["Age"];
session_start();


$query = "insert into form_info(Name,Email,Mobile,City,Age) values('$Name','$Email',$Mobile,'$City',$Age)"; 
$result = mysqli_query($db,$query);
header("Location: form1.php");
die();
?>

<!DOCTYPE HTML>
<html>
<body>
</body>
</html>