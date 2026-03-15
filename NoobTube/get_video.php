<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
ob_start();
session_start();
ini_set('memory_limit', '-1');
include 'connect.php';
			 $sql = "SELECT id, title, creator, date, vdesc, path, channel FROM videos WHERE id LIKE '{$_GET['video_id']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result -> fetch_assoc()) {
  $ch = $row["channel"];
  $pvid = $row["path"];
  $path = '../videos/channel/' . $ch . '/' . $pvid;
  echo file_get_contents($path);
  }
} else {
  header("Location: index.php?404=true");
}
if ($result = $conn->query($sql)) {
    // $result is an object and can be used to fetch row here
}
else {
    printf("Query failed: %s\n", $conn->error);
}
?>