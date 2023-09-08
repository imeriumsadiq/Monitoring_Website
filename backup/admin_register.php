<?php

//start session
//session_start();
// Connect to the database
$conn = mysqli_connect("127.0.0.1", "root", "", "sistempemantauanagensi");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$username = $_REQUEST['PIC'];
$email = $_REQUEST['email'];
$password = $_REQUEST['pw'];
$sql = "INSERT INTO adminagensi (Nama, Emel, KataLaluan) VALUES ('$username', '$email', '$password')";

// Check if the form was submitted
if (mysqli_query($conn, $sql)) {

    header("Location: Login_Page.html");
} else {
    echo "ERROR: Hush! Sorry $sql. "
    . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>