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

$business_id = $_POST['business_id'];
$business_name = $_POST['business_name'];
$address_id = $_POST['address_id'];
$rep_first_name = $_POST['rep_first_name'];
$rep_last_name= $_POST['rep_last_name'];
$rep_email = $_POST['rep_email'];
$rep_phone = $POST['rep_phone'];


$sql = "INSERT INTO Business(business_id, business_name, address_id, rep_first_name, rep_last_name, rep_email, rep_phone)
VALUES ('$business_id', '$business_name', '$address_id', '$rep_first_name', '$rep_last_name', '$rep_email', '$rep_phone')";

if ($conn->query($sql) === TRUE) {
    echo "Business information entered sucessfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>