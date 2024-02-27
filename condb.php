<!DOCTYPE html>
<?php
//$servername = "localhost";
//$username = "root";
//$password = "29032545";
//$dbname = "cswhdb";

// Create connection
$conn = mysqli_connect('localhost','root','29032545','cswhdb');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>