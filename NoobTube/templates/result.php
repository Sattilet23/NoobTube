<div class="moduleEntry"> 
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr valign="top">
					<td>
					<table cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td><a href="watch.php?v=<?php echo $row["id"]?>"><img src="<?php echo "../videos/thumb/" . $row["thumb"]?>" class="moduleEntryThumb" width="100" height="75"></a></td>
							<td><a href="watch.php?v=<?php echo $row["id"]?>"><img src="get_still.php?video_id=szGSbPgMHrM&amp;still_id=2" class="moduleEntryThumb" width="100" height="75"></a></td>
							<td><a href="watch.php?v=<?php echo $row["id"]?>"><img src="get_still.php?video_id=szGSbPgMHrM&amp;still_id=3" class="moduleEntryThumb" width="100" height="75"></a></td>
						</tr>
					</table>
					
					</td>
					<td width="100%"><div class="moduleEntryTitle"><a href="watch.php?v=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></div>
					<div class="moduleEntryDescription"><?php echo $row["vdesc"]?></div>
					<div class="moduleEntryTags">
					Tags // <a href="results.php?search=<?php echo $row["tag"]?>"><?php echo $row["tag"]?></a> 
					</div>
					<div class="moduleEntryDetails">Added On: <?php echo $row["date"]?> By <a href="profile.php?user=<?php echo $row["creator"]?>"><?php echo $row["creator"]?></a></div>
					
					</td>
				</tr>
			</table>
		</div>