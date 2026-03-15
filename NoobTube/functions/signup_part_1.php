<?php
session_start();
include("../connect.php");
include("ifuserexist.php");
$minimumpass = "14";
$rid = bin2hex(random_bytes(4));
$mypassword = md5($_POST['password']);
$myusername = $_POST['username'];
if (empty($_POST['password'])) {
	echo "Please type in a password";
	die();
} else if ($_POST['password'] == $_POST['password_2']) {
	echo "passwords match!";
} else {
	echo "passwords don't match!";
	die();
}
$sql = "INSERT INTO user (username, password, id)
VALUES ('{$myusername}', '{$mypassword}','{$rid}')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  $_SESSION['login_user'] = $myusername;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
