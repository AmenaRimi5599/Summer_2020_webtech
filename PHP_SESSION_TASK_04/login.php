<?php
	
	if(isset($_GET['message']))
	{
		echo $_GET['message'];
	}
	?>
<body>
	<table width="60%" border="1" cellspacing="0" cellpadding="5" align="center">
		<tr>
			<td width="80%" colspan="3">
				<h2>Xcompany</h2>
				<ul align="right">
				
					Logged in as<a href=""> Bob </a> |
					<a href="login.php"> Logout </a>
				</ul>
			</td>
		</tr>

		<tr height="400px">
			
			<td width="80%">
				<form action="logcheck.php" method="post">
						<fieldset><legend>LOGIN</legend>
								<table>
									<tr>
										<td>User Name:</td>
										<td><input type="text" name="uname"></td>
									</tr>
									<tr>
										<td>Password</td>
										<td><input type="password" name="password"></td>
									</tr>
									<tr>
										<td><input type="submit" name="Submit"></td>
										<td><a href="forgot_password.php">forgot password</td>
									</tr>
								</table>
						</fieldset>
				</form>
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2">copyright @2017</td>
		</tr>
	</table>
</body>
				