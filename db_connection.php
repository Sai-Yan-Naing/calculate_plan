<?php

$servername = "localhost";
$username = "plan";
$password = "welcome123";
$dbname = "plan";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>