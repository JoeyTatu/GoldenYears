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

$transport_id = $_POST['transport_id'];
$transport_name = $_POST['transport_name'];
$address_id = $_POST['address_id'];
$contact_first_name = $_POST['contact_first_name'];
$contact_last_name = $POST['contact_last_name'];
$contact_email = $_POST['contact_email'];
$contact_phone = $_POST['contact_phone'];

$sql = "INSERT INTO Transport(transport_id, transport_name, address_id, contact_first_name, contact_last_name, contact_email, contact_phone)
VALUES ('$transport_id', '$transport_name', '$address_id', '$contact_first_name', '$contact_last_name', '$contact_email', '$contact_phone')";

if ($conn->query($sql) === TRUE) {
    echo "Transport information entered sucessfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>