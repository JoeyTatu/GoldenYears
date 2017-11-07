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

$event_id = $_POST['event_id'];
$event_type_id = $_POST['event_type_id'];
$venue_id = $_POST['venue_id'];
$event_time_hour = $_POST['event_time_hour'];
$event_time_min = $_POST['event_time_min'];
$event_date = $_POST['event_date'];
$is_transport_provided = $_POST['is_transport_provided'];
$transport_id = $_POST['transport_id'];
$can_pay_cash = $_POST['can_pay_cash'];
$business_id = $_POST['business_id'];



$sql = "INSERT INTO Event(event_type, event_type_id, venue_id. event_time_hour, event_time_min, event_date, is_transport_provided, transport_id, can_pay_cash, business_id)
VALUES ('$event_type', '$event_type_id', '$venue_id', '$event_time_hour', '$event_time_min', '$event_date', '$is_transport_provided', '$transport_id', '$can_pay_cash', '$business_id')";

if ($conn->query($sql) === TRUE) {
    echo "Event information entered sucessfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>