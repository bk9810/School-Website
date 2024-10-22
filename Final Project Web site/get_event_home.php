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
$sql = "SELECT * FROM homies";
$result = $conn->query($sql);

$homes = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $homes[] = $row;
    }
}

// Return data as JSON
echo json_encode($homes);

$conn->close();
?>