<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html>
<head>
	<title>YouTube - Broadcast Yourself.</title>
    <?php include('connect.php');  
	?>
	<link rel="stylesheet" href="styles.css" type="text/css">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<link rel="alternate" type="application/rss+xml" title="YouTube - Recently Added Videos [RSS]" href="https://web.archive.orgrss/global/recently_added.rss">

	<script language="javascript" type="text/javascript">
		onLoadFunctionList = new Array();
		function performOnLoadFunctions()
		{
			for (var i in onLoadFunctionList)
			{
				onLoadFunctionList[i]();
			}
		}
	</script>
	
	<meta name="description" content="Share your videos with friends and family">
	<meta name="keywords" content="video,sharing,camera phone,video phone">
	
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
				<script type="text/javascript" src="jquery-min.js"></script>
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
		<!-- tab table -->
		<table cellpadding="0" cellspacing="0" border="0">
				<td>
				<table style="background-color: #DDDDDD; margin: 5px 2px 1px 0px; border-bottom: 1px solid #DDDDDD;" cellpadding="0" cellspacing="0" border="0">
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
				<table style="background-color: #BECEEE; margin: 5px 2px 1px 0px;" cellpadding="0" cellspacing="0" border="0">
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
				<table style="background-color: #BECEEE; margin: 5px 2px 1px 0px;" cellpadding="0" cellspacing="0" border="0">
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
				<table style="background-color: #BECEEE; margin: 5px 2px 1px 0px;" cellpadding="0" cellspacing="0" border="0">
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
				<table style="background-color: #BECEEE; margin: 5px 2px 1px 0px;" cellpadding="0" cellspacing="0" border="0">
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


		
		



<table align="center" cellpadding="0" cellspacing="0" border="0" style="margin-bottom: 10px;">
	<tr>
		<form name="searchForm" id="searchForm" method="GET" action="results.php">
	 		<td style="padding-right: 5px;"><input tabindex="1" type="text" value="" name="search" maxlength="128" style="color:#ff3333; font-size: 12px; width: 300px;"></td>
			<td>
				<input type="submit" name="search_videos" value="Search Videos">
			</td>
		</form>
	</tr>
</table>


<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#CCCCCC">
	<tr>
		<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
		<td width="100%"><img src="img/pixel.gif" width="1" height="5"></td>
		<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
	</tr>
	<tr>
		<td><img src="img/pixel.gif" width="5" height="1"></td>
		<td>
			

	<div class="moduleTitleBar">
	<table width="100%" cellpadding="0" cellspacing="0" border="0">
		<tr valign="top">
			<td><div class="moduleTitle">Tag //  <?php echo htmlspecialchars($_GET['search']); ?></div></td>
			<td align="right">
			</div>
			</td>
		</tr>
	</table>
	</div>
<?php
			 $sql = "SELECT id, tag, title, creator, date, vdesc, thumb FROM videos WHERE tag LIKE '{$_GET['search']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result -> fetch_assoc()) {
    include('templates/result.php');
  }
} else {
  echo "0 results";
}
if ($result = $conn->query($sql)) {
    // $result is an object and can be used to fetch row here
}
else {
    printf("Query failed: %s\n", $conn->error);
}
?>
		</td>
		<td><img src="img/pixel.gif" width="5" height="1"></td>
	</tr>
	<tr>
		<td><img src="img/box_login_bl.gif" width="5" height="5"></td>
		<td><img src="img/pixel.gif" width="1" height="5"></td>
		<td><img src="img/box_login_br.gif" width="5" height="5"></td>
	</tr>
</table>
		


		</td>
	</tr>
</table>
<?php include("templates/footer.php"); ?>
<div id="tooltip"></div>

</body>

</html>