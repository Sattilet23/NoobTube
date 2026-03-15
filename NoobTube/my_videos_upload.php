<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include('connect.php'); ?>
<title>NoobTube - Beta</title>
		
<?php 
$closed = "false";
if ($closed == "true") { 
echo"The uploader is having some mantainence. Try again later.";
die(); 
}?>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link href="styles.css" rel="stylesheet" type="text/css">
<link rel="alternate" type="application/rss+xml" title="YouTube " " recently added videos [rss]" href="https://web.archive.org/web/20051124122737/http://www.youtube.com/rss/global/recently_added.rss">
</head>


<body  onload="document.FormName.reset();">
<table width="800" cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
		<td bgcolor="#FFFFFF" style="padding-bottom: 25px;">
		

<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr valign="top">
		<td width="130" rowspan="2" style="padding: 0px 5px 5px 5px;"><a href="index.php"><img src="img/logo.png" width="120" height="48" alt="YouTube" border="0" style="vertical-align: middle; "></a></td>
		<td valign="top">
		
		<table width="670" cellpadding="0" cellspacing="0" border="0">
			<tr valign="top">
			<script type="text/javascript" src="js/jquery-min.js"></script>
			<script>
$(document).ready(function()
{
  var text = ["I spend too long coding","Trance - 007 Sound System Dreamscape","I like trains","Got any grapes?","Internet Explorer 6","Windows XP","Brodcast Yourself"];
  var x = Math.floor((Math.random()*7));
  $('#thing').html(text[x]);

});
</script>
				<td id="thing" style="padding: 0px 5px 0px 5px; font-style: italic;"> </td>
				<td align="right">

				 <?php 
				
				session_start();
				if (!isset( $_SESSION['login_user'])) {
				header("location: login.php");
				}
				else {
					include("templates/profile.php");
				}
					?>
				
				</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr valign="bottom">
		<td>
		
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td>
				<table style=" background-color: #BECEEE; margin: 5px 2px 1px 0px; " cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="img/pixel.gif" width="1" height="5"></td>
						<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="index.php">Home</a></td>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
					</tr>
				</table>
				</td>
				<td>
				<table style=" background-color: #BECEEE; margin: 5px 2px 1px 0px; " cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="img/pixel.gif" width="1" height="5"></td>
						<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="browse.php">Videos</a></td>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
					</tr>
				</table>
				</td>
				<td>
				<table style=" background-color: #BECEEE; margin: 5px 2px 1px 0px; " cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="img/pixel.gif" width="1" height="5"></td>
						<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="channels.php">Channels</a></td>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
					</tr>
				</table>
				</td>
				<td>
				<table style=" background-color: #BECEEE; margin: 5px 2px 1px 0px; " cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="img/pixel.gif" width="1" height="5"></td>
						<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="my_friends.php">Friends</a></td>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
					</tr>
				</table>
				</td>
				<td>
				<table style="background-color: #DDDDDD; margin: 5px 2px 1px 0px; border-bottom: 1px solid #DDDDDD;" cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="img/pixel.gif" width="1" height="5"></td>
						<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="my_videos_upload.php">Upload</a></td>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
					</tr>
				</table>
				</td>
			</tr>
		</table>
		</td>
	</tr>
	
</table>

<table align="center" width="800" bgcolor="#DDDDDD" cellpadding="0" cellspacing="0" border="0" style="margin-bottom: 10px;">
	<tr>
		<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
		<td><img src="img/pixel.gif" width="1" height="5"></td>
		<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
	</tr>
	<tr>
		<td><img src="img/pixel.gif" width="5" height="1"></td>
		<td width="790" align="center" style="padding: 2px;">

		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td style="font-size: 10px;">&nbsp;</td>
				<td><a href="my_videos.php">My Videos</a></td>
					<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="my_favorites.php">My Favorites</a></td>
					<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="my_messages.php">My Messages</a></td>
					<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="subscription_center">My Subscriptions</a></td>
					<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="pl_manager">My Playlists</a></td>
					<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="my_profile.php">My Profile</a></td>
				<td style="font-size: 10px;">&nbsp;</td>
			</tr>
		</table>
			
		</td>
		<td><img src="img/pixel.gif" width="5" height="1"></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #FFFFFF"><img src="img/box_login_bl.gif" width="5" height="5"></td>
		<td style="border-bottom: 1px solid #BBBBBB"><img src="img/pixel.gif" width="1" height="5"></td>
		<td style="border-bottom: 1px solid #FFFFFF"><img src="img/box_login_br.gif" width="5" height="5"></td>
	</tr>
</table>

<div style="padding: 0px 5px 0px 5px;">
<style>
.vdesc {
    height:60px;
}
</style>
<div class="tableSubTitle">Video Info</div>
<table width="790" align="center" cellpadding="0" cellspacing="0" border="0">
	<tr valign="top">
		<td style="padding-right: 15px;" width="510">
		<p>Please do not close out of the upload page if still loading.<p>
		
		<form method="post" enctype="multipart/form-data">
<label for="ch">Channels:</label>
  <select id="ch" name="ch">
    <option value="ada">Arts & Animation</option>
    <option value="hdi">Hobbies & Interests</option>
    <option value="pda">Pets & Animals</option>
    <option value="adv">Autos & Vehicles</option>
	<option value="h">Humor</option>
	<option value="sdt">Science & Technology</option>
	<option value="edi">Education & Instructional</option>
	<option value="m">Music</option>
	<option value="sm">Short Movies</option>
  </select>
  <br>
  <br>
  <label for="vname">Title:</label>
    <input type="text" autocomplete="off" id="vname" name="vname" size="40"><br>
	<br>
	 <label for="vdesc">Description:</label>
    <input type="text" autocomplete="off" class="vdesc" id="vdesc" name="vdesc" size="60"><br>
	<br>
	<label for="tag">Tag:</label>
    <input type="text" autocomplete="off" id="tag" name="tag" size="40"><br>
	<p>Please only enter one tag. Multi tag support is coming soon.<p>
	<br>
	<div class="tableSubTitle">Video Upload</div>
	<p>File:<p>
<input type="file" name="file"/><br>
<p>Max file size: 100 MB (or should be). No copyright or obscene material.<p>
	<input type="submit" name="uploadvid" value="Upload"/>
</form>
</form>
	<?php
	if(isset($_POST['uploadvid'])) {
		$user = $_SESSION['login_user'];
$rid = bin2hex(random_bytes(4));
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
} else	if(empty($_POST['vname'])) {
echo "Please enter a video name";
} else if(empty($_POST['tag'])) {
echo "Please enter a tag";
}  
if (isset($name)) {
$path = '../videos/channel/' . $_POST['ch'] . "/";
if (empty($name)) 
{
echo " Please choose a file";
}
else if (!empty($name)){
if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm"))
{
echo "Video Format Unsupported";
}
else if ($maxfilesize < $myfilesize) {
echo "File is too large";
} 


else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
	   $uploadedfname =  $rid . $file_ext;
	   if(move_uploaded_file($_FILES["file"]["tmp_name"], $path . $uploadedfname)) {
	   $thumbnail = $rid . '.jpg';
	   //convert things
	   $tagconverted = strtolower($_POST['tag']);
	   $tagconverted2 = htmlspecialchars($tagconverted);
	   $vnameconverted = htmlspecialchars($_POST['vname']);
	   
//end converts
shell_exec("ffmpeg -i $path $uploadedfname -ss 00:00:01.000 -vframes 1 ../videos/thumbnail/$thumbnail");
	   // Begin SQL Intergration
	    $sql = "INSERT INTO videos (id, tag, title, creator, date, vdesc, path, channel, thumb)
VALUES ( '{$rid}', '{$tagconverted2}', '{$vnameconverted}', '{$user}', '{$date}', '{$_POST['vdesc']}', '{$uploadedfname}', '{$_POST['ch']}', '{$thumbnail}')";

if ($conn->query($sql) === TRUE) {
	 print("<script>
window.location.href = 'my_videos_complete.php';
</script>");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	}
}	
}
}
}
		?>
		

		
<?php include("templates/footer.php"); ?>

<div id="tooltip"></div>

</body>
</html>