<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "book";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS form";
if ($conn->query($sql) === TRUE) {
    echo "Database prepared successfully";
} else {
    die( "Error creating database: " . $conn->error);
}
$conn->close();
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM BOOK_INFO";
$result= mysqli_query($conn, $sql);
if(empty($result)){
// sql to create table
$sql = "CREATE TABLE FORM_INFO (
ISBN VARCHAR(30) PRIMARY KEY,
TITLE VARCHAR(50) NOT NULL,
AUTHOR VARCHAR(50),
EDITION VARCHAR(50),
PUBLICATION VARCHAR(30),

)";
if ($conn->query($sql) === TRUE) {
    echo "Table BOOK_INFO created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
}



$conn->close();
?>