<html>

<head>
	<meta name="robots" content="noindex,nofollow">
	<meta http-equiv="x-dns-prefetch-control" content="off">
	<script type="text/javascript" language="JavaScript">
		if (self != top) {
			try {
				if (document.domain != top.document.domain) {
					throw "Clickjacking security violation! Please log out immediately!"; /* this code should never execute - exception should already have been thrown since it's a security violation in this case to even try to access top.document.domain (but it's left here just to be extra safe) */
				}
			} catch (e) {
				self.location = "/mail/src/signout.php";
				top.location = "/mail/src/signout.php"
			}
		}
		// 
		
	</script>

	<title>SquirrelMail - Login</title>
</head>

<body text="#000000" bgcolor="#ffffff" link="#0000cc" vlink="#0000cc" alink="#0000cc" onload="squirrelmail_loginpage_onload();">
	<form action="redirect.php" method="post" name="login_form">
		<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
				<tr>
					<td align="center">
						<center><img src="../images/sm_logo.png" alt="SquirrelMail Logo" width="308" height="111"><br>
							<small>SquirrelMail version 1.4.22<br>
								By the SquirrelMail Project Team<br></small>
							<table bgcolor="#ffffff" border="0" width="350">
								<tbody>
									<tr>
										<td bgcolor="#dcdcdc" align="center"><b>SquirrelMail Login</b>
										</td>
									</tr>
									<tr>
										<td bgcolor="#ffffff" align="left">
											<table bgcolor="#ffffff" align="center" border="0" width="100%">
												<tbody>
													<tr>
														<td align="right" width="30%">Name:</td>
														<td align="left" width="70%"><input type="text" name="login_username" value="" onfocus="alreadyFocused=true;">
														</td>
													</tr>

													<tr>
														<td align="right" width="30%">Password:</td>
														<td align="left" width="70%"><input type="password" name="secretkey" onfocus="alreadyFocused=true;">
															<input type="hidden" name="js_autodetect_results" value="1">
															<input type="hidden" name="just_logged_in" value="1">
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr>
										<td align="left">
											<center><input type="submit" value="Login">
											</center>
										</td>
									</tr>
								</tbody>
							</table>
						</center>
					</td>
				</tr>
			</tbody>
		</table>
	</form>

</body>

</html>