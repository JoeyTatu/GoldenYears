<?php
$servername = "localhost:3307";
$username = "root";
$password = "password";
$dbname = "goldenyearsbooking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$event_type_id = $_POST['event_type_id'];
$event_type_name = $_POST['event_type_name'];



$sql = "INSERT INTO Event_Type(event_type_id, event_type_name)
VALUES ('$event_type_id', '$event_type_name')";

if ($conn->query($sql) === TRUE) {
    echo "Event Type information entered sucessfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>