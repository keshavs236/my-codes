<?php
$server="localhost";
$username="root";
$password="";
$database="books";
//Create Connection
$conn = new mysqli($server,$username,$password,$database);
// Check connection
if($conn->connect_error){
	die("Connection failed: ". $conn->connect->error);
}


$conn->close();
?>