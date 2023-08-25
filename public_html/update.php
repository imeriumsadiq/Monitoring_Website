<?php
$conn = mysqli_connect("localhost", "root", "", "sistempemantauanagensi");
// GET CONNECTION ERRORS
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// SQL QUERY
$query = "SELECT * FROM infoagensi;";
// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

if ($result->num_rows > 0) {
  
}
?>
/* 
* Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
* Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
*/

