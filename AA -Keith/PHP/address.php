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

$address_id = $_POST['address_id'];
$address_street = $_POST['address_street'];
$address_street2 = $_POST['address_street2'];
$address_city = $_POST['address_city'];
$address_county = $POST['address_county'];
$address_geo_latitude = $_POST['address_geo_latitude'];
$address_geo_longtitude = $_POST['address_geo_longtitude'];

$sql = "INSERT INTO Address(address_id, address_street, address_street2, address_city, address_county, address_geo_latitude, address_geo_longtitude)
VALUES ('$address_id', '$address_street', '$address_street2', '$address_city', '$address_county', '$address_geo_latitude', '$address_geo_longtitude')";

if ($conn->query($sql) === TRUE) {
    echo "Address entered sucessfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>