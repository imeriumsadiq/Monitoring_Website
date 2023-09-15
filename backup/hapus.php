<?php
include ('conn.php');
$deleteid = $_GET['deleteid'];
$sql = "DELETE FROM infoagensi WHERE ID = $deleteid";
$result = mysqli_query($conn, $sql); 
if($result){
  echo"Deletion Success";
}
?>

