<?php
include 'DBConnection.php';
$name=$_POST["name"];
$userid=$_POST["userid"];
$password=$_POST["password"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$pincode=$_POST["pincode"];
session_start();

/*
$query= 'select * from members';
$y = mysqli_query($db,$query);


$y=array(array('Keshav','keshav@gmail.com',9911173692,'Noida',22),
		array('Rishabh','rishbh@gmail.com',9911123456,'Noida',20),
		array('Suraj','suraj@gmail.com',9911145678,'Noida',18)); 
		
foreach($y as $a){echo "</tr> <tr>"; 
foreach($a as $b){ echo "<td>".$b ."&nbsp</td>";
}}
die();
*/

$query = "INSERT INTO `members` (`Name`, `Userid`, `Email`, `Password`, `Mobile`, `Pincode`) VALUES ('$name', '$userid', '$email', '$password', '$mobile', '$pincode');";
$y = mysqli_query($db,$query);

if($y){
$_SESSION['msg']="SignUp Successful";
}
else {
	$_SESSION['msg']="SignUp failure";
}
header("Location: login.php");
die();
?>
<!DOCTYPE HTML>
<html>
<body>
</body>
</html>