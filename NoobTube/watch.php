<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html>
<head>	
	<title>NoobTube - Beta.</title>
<?php
session_start();
include 'connect.php';
			 $sql = "SELECT id, tag, title, creator, date, vdesc, path, channel, views FROM videos WHERE id LIKE '{$_GET['v']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result -> fetch_assoc()) {
    $vt = $row["title"];
  $vc = $row["creator"];
  $vd = $row["date"];
  $pvid = $row["id"];
  $ch = $row["channel"];
  $vdesc = $row["vdesc"];
  $tag = $row["tag"];
  $ph = $row["path"];
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
	<link rel="stylesheet" href="styles.css" type="text/css">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<link rel="alternate" type="application/rss+xml" title="YouTube - Recently Added Videos [RSS]" href="https://web.archive.org/web/20051105135753/http://www.youtube.com/rss/global/recently_added.rss">
			<script type="text/javascript" src="js/floshobject.js"></script>
		<script type="text/javascript" src="js/components.js"></script>
		<script type="text/javascript" src="js/AJAX.js"></script>

		<script language="javascript" type="text/javascript">
		function openFull()
		{
		window.open( "watch_fullscreen.php?video_id=<?php echo  $pvid;  ?>"
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
		<td width="130" rowspan="2" style="padding: 0px 5px 5px 5px;"><a href="index.php"><img src="img/logo.png" width="120" height="48" alt="YouTube" border="0" style="vertical-align: middle; "></a></td>
		<td valign="top">
		
		<table width="670" cellpadding="0" cellspacing="0" border="0">
		<script type="text/javascript" src="js/jquery-min.js"></script>
		<script>
$(document).ready(function()
{
  var text = ["I spend too long coding","Trance - 007 Sound System Dreamscape","I like trains","Got any grapes?","Internet Explorer 6","Windows XP","Brodcast Yourself"];
  var x = Math.floor((Math.random()*7));
  $('#thing').html(text[x]);

});
</script>
			<tr valign="top">
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
		<!-- tab table -->
		<table cellpadding="0" cellspacing="0" border="0">
				<td>
				<table style="background-color: #BECEEE; margin: 5px 2px 1px 0px;" cellpadding="0" cellspacing="0" border="0">
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
				<table style="background-color: #DDDDDD; margin: 5px 2px 1px 0px; border-bottom: 1px solid #DDDDDD;" cellpadding="0" cellspacing="0" border="0">
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
				<td><a href="browse.php?s=mr">Most Recent</a></td>
					<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="browse.php?s=mp">Most Viewed</a></td>
					<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="browse.php?s=md">Most Discussed</a></td>
					<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="browse.php?s=mf">Top Favorites</a></td>
					<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="browse.php?s=tr">Top Rated</a></td>
					<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="browse.php?s=rf">Recently Featured</a></td>
					<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="browse.php?s=r">Random</a></td>
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


		
		




<script src="js/AJAX.js" language="javascript"></script>
<script src="js/ui.js" language="javascript"></script>
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


<table width="790" align="center" cellpadding="0" cellspacing="0" border="0">
	<tr valign="top">
		<td width="510" style="padding-right: 15px;">
				
		<div style="font-size: 16px; font-weight: bold; color: #333333; padding: 5px; border-top: 1px dotted #CCCCCC;">
		<?php echo $vt ?>
		</div>
		
		<div style="text-align: center; padding-bottom: 8px;">
<video width="425" height="350" autoplay controls>
  <source src="../videos/channel/<?php echo $ch ?>/<?php echo $ph ?>" type="video/mp4">
  <!--[if IE]>
     <object type="application/x-shockwave-flash" data="np.swf" width="425" height="350">
<param name="movie" value="np.swf" />
<param name="quality" value="high" />
<param name="allowFullScreen" value="true" /> 
<param name="src" value="np.swf" />
<param name="flashvars" value="v=<?php echo $pvid; ?>" />
</object>
<![endif]-->
</video>
<?php
$sql = "UPDATE videos SET views= views + 1 WHERE id LIKE '{$_GET['v']}'";

if ($conn->query($sql) === TRUE) {
	
} else {
  echo "Error updating record: " . $conn->error;
}
?>
		</div>
		
		<div style="font-size: 12px; font-weight: bold; text-align: center; padding-bottom: 10px;">
		<a href="#comment_section">Comment on This Video</a>
		&nbsp;&nbsp;//&nbsp;&nbsp; <a href="signup.php?r=a&amp;v=zDZw7IBbLJk">Add to Favorites</a>
		&nbsp;&nbsp;//&nbsp;&nbsp; <a href="signup.php?r=o&amp;v=zDZw7IBbLJk">Flag This Video</a>
			&nbsp;&nbsp;//&nbsp;&nbsp; <a href="../videos/channel/<?php echo $ch ?>/<?php echo $ph;?>" download="<?php echo $vt;?>.pdf">Download Video</a>
		</div>


		<table width="400" cellpadding="0" cellspacing="0" border="0" align="center">
			<tr>
				<td style="padding-bottom: 15px;">
						<div style="float:left; margin-left:5em; padding-right: 18px;">
							<span>Average (2 votes)</span><br/>
										
	<nobr>
			<img style="border:0px; padding:0px; margin:0px; vertical-align:middle;" src="img/star.gif">
			<img style="border:0px; padding:0px; margin:0px; vertical-align:middle;" src="img/star.gif">
			<img style="border:0px; padding:0px; margin:0px; vertical-align:middle;" src="img/star_bg.gif">
			<img style="border:0px; padding:0px; margin:0px; vertical-align:middle;" src="img/star_bg.gif">
			<img style="border:0px; padding:0px; margin:0px; vertical-align:middle;" src="img/star_bg.gif">
	</nobr>


						</div>
						<div id="ratingDiv" style="float:right; margin-right:5em;">
							<span id="ratingMessage">Rate this video!</span><br/>

						<a href="signup.php" style="text-decoration:none;" title="Please sign up and login to rate this video.">		
	<nobr>
			<img style="border:0px; padding:0px; margin:0px; vertical-align:middle;" src="img/star_bg.gif">
			<img style="border:0px; padding:0px; margin:0px; vertical-align:middle;" src="img/star_bg.gif">
			<img style="border:0px; padding:0px; margin:0px; vertical-align:middle;" src="img/star_bg.gif">
			<img style="border:0px; padding:0px; margin:0px; vertical-align:middle;" src="img/star_bg.gif">
			<img style="border:0px; padding:0px; margin:0px; vertical-align:middle;" src="img/star_bg.gif">
	</nobr>

</a>
					</div>
					<!-- <br clear="all" />
				</div> -->
			</td>
		</tr>
	</table>
			
	<table width="485" cellpadding="0" cellspacing="0" border="0" align="center">
		<tr>
			<td>
	
			<div class="watchDescription">
				<?php echo $vdesc ?>
			</div>
			
			<div style="font-size: 11px; padding-bottom: 18px;">
				Added on <?php echo $vd ?> by <a href="profile.php?user=<?php echo $vc ?>"><?php echo $vc ?></a>
			</div>
			
			</td>
		</tr>
	</table>
			
	<table width="485" cellpadding="0" cellspacing="0" border="0" align="center">
		<tr valign="top">
			<td width="245" style="border-right: 1px dotted #AAAAAA; padding-right: 5px;">
			<div style="font-weight: bold; color:#003399; padding-bottom: 7px;">Video Details //</div>
			
			<div style="padding-bottom: 10px;"><span style="background-color: #FFFFAA; padding: 2px;">Tag:</span>&nbsp;
<a href="results.php?search=<?php echo $tag; ?>"><?php echo $tag; ?></a></div>

			<div style="padding-bottom: 10px;"><span style="background-color: #FFFFAA; padding: 2px;">Channels:</span>&nbsp;
<a href="channels_portal?c=5">Entertainment</a></div>
			
			</td>
			<td width="240" style="padding-left: 10px;">
			<div style="font-weight: bold; font-size: 12px; color:#003399; padding-bottom: 7px;">User Details //</div>

			<div style="font-size: 11px; padding-bottom: 10px;">
				<a href="profile_videos.php?user=<?php echo $vc ?>">Videos</a>: 7
				| <a href="profile_favorites.php?user=<?php echo $vc ?>">Favorites</a>: 4
				| <a href="profile_friends.php?user=<?php echo $vc ?>">Friends</a>: 3
			</div>
			
			<div style="padding-bottom: 10px;">
				<span style="background-color: #FFFFAA; padding: 2px;">User Name:</span>&nbsp; <a href="my_profile.php?user=<?php echo $vc ?>"><?php echo $vc ?></a>
			</div>	
			<div style="padding-bottom: 5px;">	
				<img src="img/SubscribeIcon.gif" align="absmiddle">&nbsp;<a href="subscription_center?add_user=<?php echo $vc ?>">subscribe</a> to <?php echo $vc ?>'s videos
			</div>
			
			<div style="font-weight: bold; padding-bottom: 10px;">
			<a href="signup.php?r=o&amp;v=zDZw7IBbLJk">Send Me a Private Message!</a>
			</div>
		</td>
	</tr>
</table>

<br/>

<!-- watchTable -->

<table width="485" cellpadding="0" cellspacing="0" border="0" align="center" style="table-layout: fixed;">
	<tr>
		<td>
			<form name="linkForm" id="linkForm">
				<table width="485" border="0" cellspacing="0" cellpadding="0" style="table-layout:fixed;">
					<tr>
						<td width="33%">
					  	<div align="left" style="font-weight: bold; font-size: 12px; color:#003399; padding-bottom: 7px;">
					  	Share Details // &nbsp;<a href="sharing.php">Help?</a>
					  	</div>
						</td>
						<td width="67%">&nbsp;</td>
          </tr>
          <tr>
          	<td valign="top"><span style="background-color: #FFFFAA; padding: 2px;">Video URL (Permalink):</span><font style="color: #000000;">&nbsp;&nbsp;</font></td>
            <td valign="top">
							<input name="video_link" type="text" onclick="javascript:document.linkForm.video_link.focus();document.linkForm.video_link.select();" value="<?php	echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";	?>" style="width: 300px;" readonly="true" style="font-size: 10px;">
              <div style="font-size: 11px;">(E-mail or link it)<br/><br/></div>
					  </td>
          </tr>
          <tr>
						<td valign="top"><span style="background-color: #FFFFAA; padding: 2px;">Embeddable Player:</span></td>
            <td valign="top">
							<input name="video_play" type="text" onclick="javascript:document.linkForm.video_play.focus();document.linkForm.video_play.select();" value="" style="width: 300px;" readonly="true" style="font-size: 10px; text-align: center;">
              <div style="font-size: 11px;">(Put this video on your website. Works on Friendster, eBay, Blogger, MySpace!)<br><br>
              </div>
			</td>  
		  </tr>  
		  <tr>
		 
					
					<tr>
						<td colspan="2" valign="top">
							<br/>
							<span style="background-color: #FFFFAA; padding: 2px;">Sites linking to this video:</span>
								<div style="font-size: 11px; padding-bottom: 7px;"></div>
									&#187; <b>1 clicks from </b> Someone<br>
						</td>
					</tr>
				</table>
			</form>
		</td>
  </tr>
</table>

<br>
<a name="comment"></a>
<div style="padding-bottom: 5px; font-weight: bold; color: #444;">Comment on this video:</div>
<form name="comment_form" id="comment_form" method="post">
	<input type="hidden" name="video_id" value="<?php echo $_GET['v']; ?>">
	<textarea tabindex="2" name="comment" cols="55" rows="3"></textarea>
	<br>
	<input type="submit" name="comment_button" value="Comment">
</form>
<br>
<div id="comment_section">
<?php
if(isset($_POST['comment_button'])) {	
$rid = bin2hex(random_bytes(4));	
$comment = 	htmlspecialchars($_POST['comment']);
$user = $_SESSION['login_user'];
if (!isset( $_SESSION['login_user'])) {
				 print("<script>
window.location.href = 'login.php';
</script>");
				} else if (!isset($_POST['video_id'])) {
					 print("<script>
window.location.href = 'index.php';
</script>");
					} else if (empty( $_POST['comment'])) {
echo "Please type in something!";
	} else {	
 $sql = "INSERT INTO comments (id, comment, user, uid, cid)
VALUES ('{$_POST['video_id']}', '{$comment}', '{$user}', '{$rid}')";

if ($conn->query($sql) === TRUE) {
	// nutn
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
}
?>
<!-- SQL -->
					<?php
					$sql = "SELECT id, comment, user, uid FROM comments WHERE id = '{$_GET['v']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result -> fetch_assoc()) {
   include('templates/comment.php');
  }
} else {
  echo "Be the first to comment on this video!";
}
if ($result = $conn->query($sql)) {
    // $result is an object and can be used to fetch row here
}
else {
    printf("Query failed: %s\n", $conn->error);
}
?>		
<!-- End SQL -->	

		</div>
<a name="flag"></a>
<table width="495" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFEEBB" style="margin-top: 10px;">
  <tr>
    <td><img src="img/box_login_tl.gif" width="5" height="5"></td>
    <td><img src="img/pixel.gif" width="1" height="5"></td>
    <td><img src="img/box_login_tr.gif" width="5" height="5"></td>
  </tr>
  <tr>
    <td><img src="img/pixel.gif" width="5" height="1"></td>
    <td width="485" style="padding: 5px 5px 10px 5px; text-align: center;">
			<div style="font-size: 14px; padding-bottom: 5px;">
				Please help keep this site <strong>SAFE</strong>, <strong>CLEAN</strong>, and <strong>AWESOME</strong>.
			</div>
			<div style="font-size: 12px;">
				Flag this video:&nbsp;
				<a href="flag_video.php?v=zDZw7IBbLJk&amp;flag=I">Inappropriate</a> &nbsp; 
				<a href="flag_video.php?v=zDZw7IBbLJk&amp;flag=M">Miscategorized</a>
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
		<td width="280">
					<div style="padding-bottom: 10px;">
						
						</div>
		
		<table width="280" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#CCCCCC">
			<tr>
				<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
				<td><img src="img/pixel.gif" width="1" height="5"></td>
				<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
			</tr>
			<tr>
				<td><img src="img/pixel.gif" width="5" height="1"></td>
				<td width="270">
				<div class="moduleTitleBar">
				<table width="270" cellpadding="0" cellspacing="0" border="0">
					<tr valign="top">

						<td><div class="moduleFrameBarTitle">Featured Videos</div></td>
						<td align="right"><div style="font-size: 11px; margin-right: 5px;"><a href="browse.php" target="_parent">See All</a></div></td>
					</tr>
				</table>
				</div>
<!-- SQL -->
<div id="side_results" name="side_results" style="width: 270px; height: 350px; overflow: auto;">
					<?php
					
					$sql = "SELECT id, title, creator, tag, date, vdesc, views, featured FROM videos WHERE featured = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result -> fetch_assoc()) {
   include('templates/watchfeatured.php');
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
<!-- End SQL -->	
						 

					<div class="moduleFrameEntry">
						<table width="235" cellpadding="0" cellspacing="0" border="0">
							<tr align="center" valign="top">
								<td><a href="browse.php">See All Videos</a></td>
							</tr>
						</table>
					</div>
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
	</tr>
</table>


		</td>
	</tr>
</table>

<?php include("templates/footer.php"); ?>
<div id="tooltip"></div>

</body>

</html>
