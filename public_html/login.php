<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "sistempemantauanagensi");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($conn) {
    // Sanitize user input
    $username = $_REQUEST['email'];
    $password = $_REQUEST['pw'];

    // Retrieve the user's information from the database
    $sql = "SELECT * FROM useragensi WHERE Emel='$username' AND KataLaluan='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if (mysqli_num_rows($result) == 1) {
        // Display a success message or redirect to a new page after successful login
        
        header("Location: LamanUtama.php");
        exit();
    } else {
        // Display an error message
        $errors["login"] = "Invalid username or password";
    }
	$sqladmin = "SELECT * FROM adminagensi WHERE Emel='$username' AND KataLaluan='$password'";
	$result1 = mysqli_query($conn, $sqladmin);
	
	if (mysqli_num_rows($result1) == 1) {
        // Display a success message or redirect to a new page after successful login
        header("Location: LamanUtama.php");
        exit();
    } else {
        // Display an error message
        $errors["login"] = "Invalid username or password";
    }
}

// Close the database connection
mysqli_close($conn);
?>
