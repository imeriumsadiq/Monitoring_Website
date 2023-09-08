<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "sistempemantauanagensi";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch distinct values from the "category" column
$query = "SELECT Agensi FROM useragensi";
$result = $conn->query($query);

$agencies = array();
while ($row = $result->fetch_assoc()) {
    $agencies[] = $row['Agensi'];
}

$conn->close();
?>