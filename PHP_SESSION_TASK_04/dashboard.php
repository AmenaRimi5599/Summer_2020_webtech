<body>
	<table border="1px" border="1" cellspacing="0" cellpadding="5" align="center">
		<tr>
			<td width="80%" colspan="3">
				<h2>Xcompany</h2>
				<ul align="right">
				
					Logged in as<a href="view_profile.php"><?=$_COOKIE['name']?></a> |
					<a href="logout.php"> Logout </a>
				</ul>
			</td>
		</tr>

		<tr height="400px">
			<td>
				<ul>
					<li><a href="dashboard.php"> Dashboard </a></li>
					<li><a href="view_profile.php"> View Profile </a></li>
					<li><a href="edit_profile.php"> Edit Profile </a></li>
					<li><a href="picture.php"> Change Profile Picture </a></li>
					<li><a href="change_password.php"> Change Password</a></li>
					<li><a href="logout.php"> Logout</a></li>
				</ul>
			</td>
			<td width="80%">
				<h3>Welcome <?=$_COOKIE['name']?></h3>
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2">copyright @2017</td>
		</tr>
	</table>
</body>
				