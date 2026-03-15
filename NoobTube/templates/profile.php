<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td>Hello, <a href="profile.php?user=<?php echo htmlspecialchars($_SESSION['login_user']); ?>"><strong><?php echo  htmlspecialchars($_SESSION['login_user']); ?></strong></a>!</td>
<td style="padding: 0px 5px 0px 5px;">|</td>
						<td style="padding-right: 5px;"><a href="functions/logout.php">Logout</a></td>
						<td style="padding: 0px 5px 0px 5px;">|</td>
						<td style="padding-right: 5px;"><a href="help.php">Help</a></td>
					</tr>
				</table>