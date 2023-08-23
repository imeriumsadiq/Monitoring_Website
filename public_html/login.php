<?php

session_start();

// Check if the "username" and "password" fields are not empty
if (!empty($_POST["emel"]) && !empty($_POST["KataLaluan"])) {
  $username = $_POST["emel"];
  $password = $_POST["KataLaluan"];

  $con = mysqli_connect("localhost", "root", "", "sistempemantauanagensi") or die("Connection error: " . mysqli_error());
  $query = "SELECT * FROM useragensi WHERE Emel = '$username' AND KataLaluan = '$password'";
  $result = mysqli_query($con, $query);

  if (mysqli_num_rows($result) == 1) {
    // Save the username in the session and redirect to the eventreg.php page
    $row = mysqli_fetch_array($result);
    $name = $row['Nama'];
    $_SESSION['nama'] = "$name";
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $_SESSION['login_time'] = date("d M Y H:i");
    header("Location: LamanUtama.php");
    echo "user authenticated";
  } else {
    echo "user doesn't exist";
    die();
  }
}
?>
