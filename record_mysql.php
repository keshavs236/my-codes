<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database

$sql = "CREATE DATABASE IF NOT EXISTS myDB";
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

$sql = "SELECT id FROM MyGuests";
$re_check= mysqli_query($conn, $sql);
if(empty($re_check)){
// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
age VARCHAR(50) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
}

$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, age) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $firstname, $lastname, $age);
$stmt->execute();

switch($display){
case 1:
$sql = "SELECT id, firstname, lastname, age FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - firstame: ". $row["firstname"]." " . $row["lastname"] . "\t " . $row["age"] ;
    }
} else {
    echo "0 results";
}
default: echo $result;
}
$conn->close();
?>














