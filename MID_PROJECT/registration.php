<?php
function Name()
{
	$error = "";
	$name = "";

	if (isset($_GET['name'])) 
	{
		$name=$_GET['name'];
  		if (empty($name)) 
  		{
    		$error = "Invalid";
  		}
  		else 
  		{
    		$name =$_GET["name"] ;
    
    		if (!preg_match("/^[a-zA-Z ]*$/",$name ) )
    		{
      			$error = "Invalid";
    		}
    		if (strlen($name) < 2)
    		{
      			$error = "Invalid";
    		}
  		}
	}
	if($error == "")
    	echo $name;
	else
  		echo "Invalid";

}


function Email()
{
	// cannot be empty
	if(isset($_GET['email']))
	{
		$email=$_GET['email'];
		//must be valid
		if($email=="")
		{
			echo "Invalid Email";
		}
		else
		{
			
		}
	}
}

function Gender()
{
	if(isset($_GET['gender']))
	{
		$gender=$_GET['gender'];
		echo $gender;
	}
	else
	{
		//at least one of them has to be seleted
		if(isset($_GET['submit']))
		{
			echo " select one gender";
		}
	}
}

function DateOfBirth()
{
	$error="";
	$day="";
	$month="";
	$year="";

	if(isset($_GET['date']))
	{
		$day=(int)$_GET['date'];
		if($day>0 and $day<=31)
		{
			
		}
		else
		{
			$error="Invalid";
		}
		
	}
	if(isset($_GET['month']))
	{
		$month=(int)$_GET['month'];
		if($month>0 and $month<=12)
		{
			
		}
		else
		{
			$error="Invalid";
		}
	}
	if(isset($_GET['year']))
	{
		$year=(int)$_GET['year'];
		if($year>=1900 and $year<=2016)
		{
			
		}
		else
		{
			$error="Invalid";
		}
	}
	


	if($error == "")
	{
		/*echo $day."<br>";
		echo $month."<br>";
		echo $year."<br>";*/
	}
	else
	{
		echo "Invalid";
	}
}





?>
<!DOCTYPE Html>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
  <tr>
    <td width="800px"><h1>X HOTEL</h1>
      <ul align="right">
        <a href="home.php">Home</a>|
        <a href="login.php">Login</a>|
        <a href="registration.php">Registration</a>
      </ul>
    </td>
  </tr>

  <tr height="500px">
    <td>
        <fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form action="regCheck.php" method="POST">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text"><?php Name();?></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="userName" type="text"></td>
				<td></td>
			</tr>

			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Type</td>
				<td>:</td>
				<td><select name="userType">
					<option>Chef</option>
					<option>Worker</option>
				</select></td>
				<td></td>
			</tr>

			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
					<?php Email();?>
				</td>
				<td></td>
			</tr>		
				
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="pass" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio">Male
						<input name="gender" type="radio">Female
						<input name="gender" type="radio">Other
					</fieldset>
					<?php Gender(); ?>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" size="2" name="day"/>/
						<input type="text" size="2" name="month" />/
						<input type="text" size="4" name="year" />
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</fieldset>
					<?php DateOfBirth(); ?>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="Submit" name="submit">
		<input type="reset">
	</form>
</fieldset>
    </td>
  </tr>

  <tr>
    <td align="center">copyright@2017</td>
  </tr>
</table>

</body>
</html>