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

$customer_id = $_POST['customer_id'];
$first_name = $_POST['first_name'];
$last_name= $_POST['last_name'];
$email = $_POST['email'];
$address_id = $POST['address_id'];
$has_account = $_POST['has_account'];


$sql = "INSERT INTO Customer(customer_id, first_name, last_name, email, address_id, has_account)
VALUES ('$customer_id', '$first_name', '$last_name', '$email', '$address_id', '$has_account')";

if ($conn->query($sql) === TRUE) {
    echo "Customer information entered sucessfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>