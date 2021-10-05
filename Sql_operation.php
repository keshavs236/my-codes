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

$sql = "SELECT id, firstname, email, website, comment, gender FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]." " . $row["email"] . "\t " . $row["website"] . " " . $row["comment"] . " " . $row["gender"] ;
    }
} else {
    echo "0 results";
}

$sql = "SELECT * FROM MyGuests LIMIT 10"; 

// sql to delete a record
/*
$sql = "DELETE FROM MyGuests ";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
*/

/*$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}*/

$conn->close();
?>