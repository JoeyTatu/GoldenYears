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

$venue_id = $_POST['venue_id'];
$venue_name = $_POST['venue_name'];
$address_id = $_POST['address_id'];
$venue_contact_first_name = $_POST['venue_contact_first_name'];
$venue_contact_last_name= $_POST['venue_contact_last_name'];
$venue_phone = $POST['venue_phone'];


$sql = "INSERT INTO Venue(business_id, business_name, address_id, rep_first_name, rep_last_name, rep_email, rep_phone)
VALUES ('$venue_id', '$venue_name', '$address_id', '$venue_contact_first_name', '$venue_contact_last_name','$venue_phone')";

if ($conn->query($sql) === TRUE) {
    echo "Venue information entered sucessfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>