<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_event_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch sports data
$sql = "SELECT * FROM events";
$result = $conn->query($sql);

$events = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
}

// Return data as JSON
echo json_encode($events);

$conn->close();
?>