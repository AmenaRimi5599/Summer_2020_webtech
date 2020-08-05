<?
	if(isset($_POST['Submit']))
	{
		if(empty($_POST['name']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['gender']) || empty($_POST['day']) || empty($_POST['month']) || empty($_POST['year']))
		{
			echo "Invalid value";
		}
		else
		{
			$name=$_POST['name'];
			$uname=$_POST['username'];
			$email=$_POST['email'];
			$gender=$_POST['gender'];
			$day=$_POST['day'];
			$month=$_POST['month'];
			$year=$_POST['year'];
			

			setcookie('name',$name,time()+3600,'/');
			setcookie('username',$uname,time()+3600,'/');
			setcookie('email',$email,time()+3600,'/');
			setcookie('gender',$gender,time()+3600,'/');
			setcookie('day',$day,time()+3600,'/');
			setcookie('month',$month,time()+3600,'/');
			setcookie('year',$year,time()+3600,'/');

			header('location:view_profile.php');

		}
	}
	else
	{
		echo "Something wrong!!";
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
			<td width="60%">
				<form>
					<fieldset>
							<legend>EDIT PROFILE</legend>
							<form>
			
								<table width="60%" >
									<tr>
										<td>Name</td>
				
										<td>:</td>
										<td><input type="text" name="name"></td>
									</tr>
									<tr>
										<td colspan="3"><hr/></td>
									</tr>
									<tr>
										<td>Email</td>
										
										<td>:</td>
										<td><input type="email" name="email" placeholder="sample@gmail.com">
											<abbr title="hint:sample@example.com"><i>i</i></abbr>
										</td>
									</tr>
									<tr>
										<td colspan="3"><hr/></td>
									</tr>
									<tr>
										<td>Gender</td>
										
										<td>:</td>
										<td><input type="radio" name="gender"> Male
											<input type="radio" name="gender"> Female
											<input type="radio" name="gender"> Other
										</td>
									</tr>
									<tr>
										<td colspan="3"><hr/></td>
									</tr>
									<tr>
										<fieldset>
                    							<legend>Date of Birth</legend>    
							                    <input type="text" size="2" name="day">/
							                    <input type="text" size="2" name="month">/
							                    <input type="text" size="3" name="year">
							                    <font size="2"><i>(dd/mm/yyyy)</i></font>
                						</fieldset>
										
									</tr>
								</table>
								<hr/>
									<input type="submit" name="submit">
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
				