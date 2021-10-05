<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, email, website, gender, comment) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $website, $gender, $comment);

// set parameters and execute
$stmt->execute();
$name = "John";
$email = "john@example.com";
$website = "John";
$gender = "John";
$comment = "John";




echo "New records created successfully";

$stmt->close();
$conn->close();
?>