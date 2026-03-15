<?php
$servername = "localhost";
$username = "nbclient";
$password = "v2H5-OCmHnH1R_Au";
$dbname = "noobtube";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>