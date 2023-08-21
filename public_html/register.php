<?php

//start session
//session_start();
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "sistempemantauanagensi");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$username = $_REQUEST['PIC'];
$agensi = $_REQUEST['agensi'];
$email = $_REQUEST['email'];
$password = $_REQUEST['pw'];
$check = "SELECT * FROM useragensi WHERE Emel ='$email'";
$stmt = $conn->prepare($check);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    echo "Email Already Exist!!";
} else {
    $sql = "INSERT INTO useragensi (Nama,Agensi,Emel,KataLaluan) VALUES ('$username', '$agensi', '$email', '$password')";
    $insert_stmt = $conn->prepare($sql);
    $insert_stmt->execute();
    header("Location: Login_Page.html");
}
//// Check if the form was submitted
//if (mysqli_query($conn, $sql)) {
//
//    header("Location: Login_Page.html");
//} else {
//    echo "ERROR: Hush! Sorry $sql. "
//    . mysqli_error($conn);
//}
// Close the database connection
mysqli_close($conn);
?>