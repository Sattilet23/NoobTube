<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>NoobTube - Beta</title>
		
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
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link href="styles.css" rel="stylesheet" type="text/css">
<link rel="alternate" type="application/rss+xml" title="YouTube " " recently added videos [rss]" href="https://web.archive.org/web/20051110053905/http://www.youtube.com/rss/global/recently_added.rss">
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
		<td><a href="my_profile.php?user=<?php echo $_GET['user']; ?>">Profile</a></td>
		<td style="padding: 0px 5px 0px 5px;">|</td>
		<td><strong>Profile Videos</strong></td>
		<!--
		<td style="padding: 0px 5px 0px 5px;">|</td>
		<td><a href="profile_videos_private.php?user=69jullie69">Private Videos</a> (0)</td>
		-->
		<td style="padding: 0px 5px 0px 5px;">|</td>
		<td><a href="profile_favorites.php?user=69jullie69">Favorites</a></td>
		<td style="padding: 0px 5px 0px 5px;">|</td>
		<td><a href="profile_friends.php?user=<?php echo $_GET['user']; ?>">Friends</a></td>
		<td style="padding: 0px 5px 0px 5px;">|</td>
		<td><a href="profile_play_list?user=69jullie69">Playlists</a></td>
		<?php 
				
				if (!isset( $_SESSION['login_user'])) {
				
				}
				else if ($_SESSION['login_user'] == $_GET['user']){
					print('<td style="padding: 0px 5px 0px 5px;">|</td>
		<td><a href="profile_editor.php?user=">Edit Profile</a></td>');
				}
					?>
	</tr>
</table>
</div>

<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
	<tr valign="top">
		<td style="padding-right: 15px;">

		<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#CCCCCC">
			<tr>
				<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
				<td width="100%"><img src="img/pixel.gif" width="1" height="5"></td>
				<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
			</tr>
			<tr>
				<td><img src="img/pixel.gif" width="5" height="1"></td>
				<td>
				
				<div class="watchTitleBar">
					<table width="100%" cellpadding="0" cellspacing="0" border="0">
						<tr valign="top">
							<td><div class="moduleTitle">Public Videos // <span style="text-transform: capitalize;">69jullie69</span></div></td>
 							<td align="right"> 
								<div style="font-weight: bold; color: #444; margin-right: 5px;">
								Videos 1-1 of 1								</div>
							</td>
						</tr>
					</table>
				</div>

						
										
				<div class="moduleEntry"> 
					<table width="100%" cellpadding="0" cellspacing="0" border="0">
						<tr valign="top">
							<td><a href="watch.php?v=QZeRZjSmJ1I"><img src="https://web.archive.org/web/20051110053905im_/http://static.youtube.com/get_still.php?video_id=QZeRZjSmJ1I" class="moduleEntryThumb" width="120" height="90"></a></td>
							<td width="100%"><div class="moduleEntryTitle"><a href="watch.php?v=QZeRZjSmJ1I">Pretty Fly For A White Guy</a></div>
							<div class="moduleEntryDescription">Rocky Singing</div>
							<div class="moduleEntryTags">
		
							Tags // <a href="results.php?search=pretty">pretty</a> : <a href="results.php?search=fly">fly</a> : <a href="results.php?search=for">for</a> : <a href="results.php?search=aa">aa</a> : <a href="results.php?search=white">white</a> : <a href="results.php?search=guy">guy</a> : 							</div>
		
							<div class="moduleEntryDetails">Added: August 21, 2005 by <a href="profile.php?user=69jullie69">69jullie69</a></div>
							<div class="moduleEntryDetails">Runtime: 01:09 | Views: 97 | Comments: 0</div>
							</td>
		
						</tr>
					</table>
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

		</td>
		<td width="180">
		<a href="https://web.archive.org/web/20051110053905/http://www.youtube.com/rss/user/69jullie69/my_videos.rss"><img src="img/rss.gif" width="36" height="14" border="0" style="vertical-align: text-top;"></a> 
		<span style="font-size: 11px; margin-right: 3px;"><a href="https://web.archive.org/web/20051110053905/http://www.youtube.com/rss/user/69jullie69/my_videos.rss">Feed For User // 69jullie69</a></span>
		
		<div style="font-weight: bold; color: #333; margin: 10px 0px 5px 0px;">Related Tags:</div>

		
			<div style="padding: 0px 0px 5px 0px; color: #999;">&#187; <a href="results.php?search=white">white</a></div>

			
			<div style="padding: 0px 0px 5px 0px; color: #999;">&#187; <a href="results.php?search=guy">guy</a></div>

			
			<div style="padding: 0px 0px 5px 0px; color: #999;">&#187; <a href="results.php?search=aa">aa</a></div>

			
			<div style="padding: 0px 0px 5px 0px; color: #999;">&#187; <a href="results.php?search=for">for</a></div>

			
			<div style="padding: 0px 0px 5px 0px; color: #999;">&#187; <a href="results.php?search=fly">fly</a></div>

			
			<div style="padding: 0px 0px 5px 0px; color: #999;">&#187; <a href="results.php?search=pretty">pretty</a></div>

			
		</td>
	</tr>
</table>

		</div>
		</td>
	</tr>
</table>

<?php include('templates/footer.php'); ?>

<div id="tooltip"></div>

</body>
</html>