<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "books";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS books";
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
$sql = "CREATE TABLE BOOK_INFO (
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
$sql = "SELECT * FROM Members";
$result= mysqli_query($conn, $sql);
if(empty($result)){
// sql to create table
$sql = "CREATE TABLE Members(
ID int(10) AUTO_INCREMENT PRIMARY KEY,
UserId varchar(30) UNIQUE NOT NULL,
Password varchar(30) NOT NULL,
Name varchar(25) NOT NULL,
Email varchar(25) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Members created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
}

$sql = "SELECT * FROM trxn";
$result= mysqli_query($conn, $sql);
if(empty($result)){
// sql to create table
$sql = "CREATE TABLE trxn(
TrxnID int(10) AUTO_INCREMENT PRIMARY KEY,
ISBN VARCHAR(30) NOT NULL,
ID int(10) NOT NULL,
Bookstatus VARCHAR(10) DEFAULT 'I',
Issuedate timestamp NOT NULL,
Returndate timestamp NOT NULL,
FOREIGN KEY (ID) REFERENCES members(ID),
FOREIGN KEY (ISBN) REFERENCES book_info(ISBN)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table trxn created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
}
$conn->close();
?>