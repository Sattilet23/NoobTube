<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>YouTube - Broadcast Yourself.</title>
		
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
<link rel="alternate" type="application/rss+xml" title="YouTube " " recently added videos [rss]" href="https://web.archive.org/web/20051124122558/http://www.youtube.com/rss/global/recently_added.rss">
</head>


<body>
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



<div class="tableSubTitle">April 4th, 2021</div>
<br>
I bet I'm never going to update this, but this is a new features tab. And there is quite a lot of new features on NoobTube. 
<br/>
<ul>
	<li>
		<b>This tab</b><br/>
		Yup. I did this in V1.0 (which was in development in January - Febuary), so why not do it in V1.2.
	</li>
		<br/>
		<b>Users</b><br/>
		With Username checking and encrypted passwords. Reqired for uploading videos.
	</li>
		<br/>
		<br/>
		<b>Uploader</b><br/>
		Now, you can upload videos like a video website should do. FIle limit is 100MB. No copyrighted or obscene material.
	</li>
	    <br/>
		<br/>
		<b>Sign Up</b><br/>
		like a video website should do
	</li>
		<br/>
	
</ul>
		</div>
		
		<div class="tableSubTitle">April 12th, 2021</div>
<br>
Yay! We made it to 1.3! Just two more version till a new layout (which would take a little bit to make). <br> Don't worry, you will still have the 2005 layout. It will be moved to /dev. Anyways, here is the new features in 1.3.
<br/>
<ul>
	<li>
		<b>Comments</b><br/>
		Requested by the Bwitter community, you can now have a voice on noobtube (although you already have one).
	</li>
		<br/>
		<b>Old Flash Video Player</b><br/>
		Although buggy, It's better than the HTML5 player, since it works with any browser that supports Adobe Flash (only old browsers like IE). 
	</li>
		<br/>
		<br/>
		<b>Bug fixes</b><br/>
		We're trying to fix bugs in the uploader (for example, the blank video bug).
	</li>
		<br/>
</ul>
		</div>
		
		<div class="tableSubTitle">April 29th, 2021</div>
<br>
1.4 was just some bug fixes. Nothing special except XSS was fixed and we will reopen NoobTube.
	</li>
		<br/>
	
</ul>
		</div>
		
		</td>
	</tr>
</table>
</div>


<?php include('templates/footer.php'); ?>

<div id="tooltip"></div>

</body>
</html>
