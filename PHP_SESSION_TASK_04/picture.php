<?php
	if(isset($_COOKIE['picture']))
	{
		$img=$_COOKIE['picture'];
	}
	else
	{
		$img="a.jpg";
	}
	if(isset($_POST['Submit']))
	{
		if($_POST['picture']!="")
		{
			setcookie('picture',$_POST['picture'],time()+3600,'/');
			$img=$_POST['picture'];
		}
	}
	?>
<body>
	<table border="1px" border="1" cellspacing="0" cellpadding="5" align="center">
		<tr>
			<td width="80%" colspan="3">
				<h2>Xcompany</h2>
				<ul align="right">
				
					Logged in as<a href="dashboard.php"><?=$_COOKIE['name']?></a> |
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
				<form>
					<fieldset>
    						<legend><b>PROFILE PICTURE</b></legend>
    						<form>
        						<img width="128" src="a.jpg" />
        						<br />
       							 <input type="file" name="picture">
        						<hr />
        						<input type="submit" value="Submit">
	    						</form>
					</fieldset>
				</form>
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2">copyright @2017</td>
		</tr>
	</table>
</body>
				