<?php
 session_start();
include("../connect.php");
$myusername = $_POST['username'];
$mypassword = md5($_POST['password']);
$sql = "SELECT username, password, isbanned, ismod FROM user WHERE username = '$myusername' and password = '$mypassword' and isbanned = '0'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  // output data of each row
  while($row = $result -> fetch_assoc()) {
    $_SESSION['login_user'] = $myusername;
  $_SESSION['ismod'] = $row["ismod"];
	header('Location: ../');
  }
} else {
  echo "incorrect!!";
}
if ($result = $conn->query($sql)) {
    // $result is an object and can be used to fetch row here
}
else {
    printf("Query failed: %s\n", $conn->error);
}
?>