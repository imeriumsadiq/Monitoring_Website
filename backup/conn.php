<?php
    $sname= "localhost";
    $uname= "root";
    $password = "";
    $db_name = "sistempemantauanagensi";

    $conn = new mysqli($sname, $uname, $password, $db_name);

    if ($conn->connect_error) {
        echo "Connection failed!";
    }
?>