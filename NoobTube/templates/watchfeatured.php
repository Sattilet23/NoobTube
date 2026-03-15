

					<div class="moduleFrameEntry">

						<table width="235" cellpadding="0" cellspacing="0" border="0">
							<tr valign="top">
								<td width="90">
									<a href="watch.php?v=watch.php?v=<?php echo $row["id"]?>" class="bold" target="_parent"><img src="get_still.php?video_id=zDZw7IBbLJk" class="moduleEntryThumb" width="80" height="60"></a></td>
								<td>
									<div class="moduleFrameTitle"><a href="watch.php?v=<?php echo $row["id"]?>" target="_parent"><?php echo $row["title"]?></a></div>
									<div class="moduleFrameDetails">
										by <a href="my_profile.php?user=<?php echo $row["creator"]?>" target="_parent"><?php echo $row["creator"]?></a>
									</div>
									<div class="moduleFrameDetails">
									Added: <?php echo $row["date"]?>
									</div>
		
								</td>
							</tr>
						</table>
					</div>