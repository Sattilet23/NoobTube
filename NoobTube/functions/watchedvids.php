<?php 
session_start();
include("connect.php");
if (!isset($_SESSION['login_user'])) {
echo "not logged in";
} else {
$user = $_SESSION['login_user'];
$sql = "UPDATE user SET videos= videos + 1 WHERE username='{$user}'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
}
?>