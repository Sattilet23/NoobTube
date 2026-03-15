
<?php
echo 'please wait about 1 to 3 minutes to upload.';
	session_start();
include('../connect.php');
if (!isset($_FILES['file'])) {
	header("Location: ../index.php");
	die();
}
$user = $_SESSION['login_user'];
$rid = bin2hex(random_bytes(4));
$tagconverted = strtolower($_POST['tag']);
$date = date("Y/m/d");
$name=  basename($_FILES['file']['name']);
$tmp_name= $_FILES['file']['tmp_name'];
$maxfilesize = "104857600 ";
$myfilesize = filesize($tmp_name);
$position= strpos($name, ".");
$file_ext = substr($name, strripos($name, '.')); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);
if(empty($_POST['vdesc'])) {
echo "Please enter a Description";
die();
}	
if(empty($_POST['vname'])) {
echo "Please enter a video name";
die();
}	
if(empty($_POST['tag'])) {
echo "Please enter a tag";
die();
}	
if (isset($name)) {
$path = '../../videos/channel/' . $_POST['ch'];
if (empty($name)) 
{
echo "Please choose a file";
die();
}
else if (!empty($name)){
if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm"))
{
echo "Video Format Unsupported";
die();
}
else if ($maxfilesize < $myfilesize) {
echo "File is too large";
die();
}	


else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
	   $uploadedfname =  $rid . $file_ext;
	   move_uploaded_file($_FILES["file"]["tmp_name"], $path . $uploadedfname);
		echo('Video Uploaded');			 
}
}
}
 $multitag = explode(',', $myString);
 $sql = "INSERT INTO videos (id, tag, title, creator, date, vdesc, path, channel)
VALUES ( '{$rid}', '{$tagconverted}', '{$_POST['vname']}', '{$user}', '{$date}', '{$_POST['vdesc']}', '{$uploadedfname}', '{$_POST['ch']}')";

if ($conn->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>