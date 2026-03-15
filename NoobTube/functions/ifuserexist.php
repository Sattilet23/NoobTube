<?php
include("../connect.php");
include_once("signup_part_1.php");
$myusername = $_POST['username'];
if (empty($_POST['username'])) {
	echo "Please type in a username";
	die();
}
$sql = "SELECT username FROM user WHERE username = '$myusername'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  while($row = $result -> fetch_assoc()) {
      	    echo "Username not avalable";
  die();
} 
}
else {
  echo "Username avalable";
}
if ($result = $conn->query($sql)) {
    // $result is an object and can be used to fetch row here
}
else {
    printf("Query failed: %s\n", $conn->error);
}
?>