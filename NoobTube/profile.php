<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>NoobTube - Beta</title>

		<?php 
		session_start();
		mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT); include("connect.php");   ?>
<!-- SQL -->
					<?php
if (!isset($_GET['user'])) {
	header("Location: index.php");
}
$sql = "SELECT username, id, ismod, pdesc, rname, favbook, favmov, favmic FROM user WHERE username = '{$_GET['user']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	 $desc = htmlspecialchars($row["pdesc"]);
	 $rname = htmlspecialchars($row["rname"]);
	 $favbook = htmlspecialchars($row["favbook"]);
	 $favmov = htmlspecialchars($row["favmov"]);
	 $favmic = htmlspecialchars($row["favmic"]);
	 $username = htmlspecialchars($row["username"]);
	 $ismod = $row["ismod"];
  }
} else {
  header("Location: index.php");
}
?>
<!-- End SQL -->	
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link href="styles.css" rel="stylesheet" type="text/css">
<link rel="alternate" type="application/rss+xml" title="YouTube " " recently added videos [rss]" href="https://web.archive.org/web/20051111105805/http://www.youtube.com/rss/global/recently_added.rss">
</head>


<body>
<table width="800" cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
		<td bgcolor="#FFFFFF" style="padding-bottom: 25px;">
		

<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr valign="top">
		<td width="130" rowspan="2" style="padding: 0px 5px 5px 5px;"><a href="index.php"><img src="img/logo.png" width="120" height="48" alt="NoobTube" border="0" style="vertical-align: middle; "></a></td>
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
				
				if (!isset( $_SESSION['login_user'])) {
				include("templates/profilelogin.php");
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
				<table style=" background-color: #BECEEE; margin: 5px 2px 1px 5px; " cellpadding="0" cellspacing="0" border="0">
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
				<table style=" background-color: #BECEEE; margin: 5px 2px 1px 0px; " cellpadding="0" cellspacing="0" border="0">
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



<div style="padding-bottom: 15px;">
<table align="center" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td><strong>Profile</strong></td>
		<td style="padding: 0px 5px 0px 5px;">|</td>
		<td><a href="profile_videos.php?user=<?php echo $_GET['user']; ?>">Public Videos</a></td>
		<td style="padding: 0px 5px 0px 5px;">|</td>
		<td><a href="profile_favorites.php?user=<?php echo $_GET['user']; ?>">Favorites</a></td>
		<td style="padding: 0px 5px 0px 5px;">|</td>
		<td><a href="profile_friends.php?user=<?php echo $_GET['user']; ?>">Friends</a></td>
		<td style="padding: 0px 5px 0px 5px;">|</td>
		<td><a href="profile_play_list?user=<?php echo $_GET['user']; ?>">Playlists</a></td>
	</tr>
</table>
</div>

<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
	<tr valign="top">
		<td width="595" style="padding-right: 15px;">
		<div style="border: 1px solid #CCCCCC; padding: 15px 15px 30px 15px;">
		<div style="font-size: 18px; font-weight: bold; color: #CC6633; margin-bottom: 2px;">Hello. I'm <?php echo $username; ?>.</div>
			<!-- Personal Information: -->
			<?php 
			if($ismod == 1) {
			print "Moderator";
			} else {
			}
			?>
			<?php 
			if(!empty($desc)) {
			print "<div class='profileLabel'>About Me</div>" . $desc;
			} else {
			}
			?>
			<?php 
			if(!empty($rname)) {
			print "<div class='profileLabel'>Real Name</div>" . $rname;
			} else {
			}
			?>
			<?php 
			if(!empty($favbook)) {
			print "<div class='profileLabel'>Favorite Book</div>" . $favbook;
			} else {
			}
			?>
			<?php 
			if(!empty($favmov)) {
			print "<div class='profileLabel'>Favorite Movie</div>" . $favmov;
			} else {
			}
			?>
			<?php 
			if(!empty($favmic)) {
			print "<div class='profileLabel'>Favorite Music</div>" . $favmic;
			} else {
			}
			?>
					
					
					
					
					
					
						
			<!-- Location Information -->
		
					
					
					
					
					
					
					
					
					
					
		</div>
		</td>
		
		<td width="180">
		
		
			
<div style="padding-top: 15px;">
		<table width="180" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#EEEEDD">
			<tr>
				<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
				<td><img src="img/pixel.gif" width="1" height="5"></td>
				<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
			</tr>
			<tr>
				<td><img src="img/pixel.gif" width="5" height="1"></td>
				<td width="170">

				<div style="padding: 2px 5px 10px 5px;">
				<div style="font-size: 14px; font-weight: bold; margin-bottom: 8px; color: #666633;">Status</div>
				<?php
				$sql = "SELECT Count(1) FROM user";
				$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo 'Users: ' .  $row['Count(1)'];
?>
<br>
				<?php
				$sql = "SELECT Count(1) FROM videos";
				$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo 'Videos: ' .  $row['Count(1)'];
?>
				
				</div>

				</td>
				<td><img src="img/pixel.gif" width="5" height="1"></td>
			</tr>
			<tr>
				<td><img src="img/box_login_bl.gif" width="5" height="5"></td>
				<td><img src="img/pixel.gif" width="1" height="5"></td>
				<td><img src="img/box_login_br.gif" width="5" height="5"></td>
			</tr>
		</table>
		</div>
		
		</td>
	</tr>
</table>

		</div>
		</td>
	</tr>
</table>

<table cellpadding="10" cellspacing="0" border="0" align="center">
	<tr>
		<td align="center" valign="center"><span class="footer"><a href="whats_new.php">What's New</a> <img src="img/new.gif"> | <a href="about.php">About Us</a> | <a href="help.php">Help</a> | <a href="/web/20051111105805/http://www.youtube.com/api/dev">Developers</a> | <a href="terms.php">Terms of Use</a> | <a href="privacy.php">Privacy Policy</a> 
		<br><br>Copyright &copy; 2005 YouTube, LLC&#8482; | <a href="rss/global/recently_added.rss"><img src="https://web.archive.orgimg/rss.gif" width="36" height="14" border="0" style="vertical-align: text-top;"></a></span></td>
	</tr>
</table>

<div id="sheet" style="position:fixed; top:0px; visibility:hidden; width:100%; text-align:center;">
<table width="100%">
<tr>
<td align="center">
<div id="sheetContent" style="filter:alpha(opacity=50); -moz-opacity:0.5; opacity:0.5; border: 1px solid black; background-color:#cccccc; width:40%; text-align:left;"></div>
</td>
</tr>
</table>
</div>

<div id="tooltip"></div>

</body>
</html>
