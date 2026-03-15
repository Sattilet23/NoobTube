<?php
$previous = "javascript:history.go(-1)";
$rid = bin2hex(random_bytes(4));
include("../connect.php");			
session_start();
$user = $_SESSION['login_user'];
if (!isset( $_SESSION['login_user'])) {
				header("location: ../login.php");
				die();
				}
if (!isset($_POST['video_id'])) {
					header("location: ../index.php");	
					}
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}
	if (empty( $_POST['comment'])) {
echo "Please type in something!";
	die(); 
	}		
 $sql = "INSERT INTO comments (id, comment, user, cid)
VALUES ('{$_POST['video_id']}', '{$_POST['comment']}', '{$user}', '{$rid}')";

if ($conn->query($sql) === TRUE) {
  header("location: $previous");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>