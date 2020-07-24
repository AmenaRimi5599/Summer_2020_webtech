<?php
function Name()
{
	$error = "";
	$name = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
  		if (empty($_POST["sname"])) 
  		{
    		$error = "Invalid";
  		}
  		else 
  		{
    		$name =test_input($_POST["sname"] );
    
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

	function test_input($data) 
	{
  		$data = trim($data);
  //$data = stripslashes($data);
  		return $data;
	}


}


function Email()
{
	// cannot be empty
	if(isset($_GET['semail']))
	{
		$email=$_GET['semail'];
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
	if(isset($_GET['sgender']))
	{
		$gender=$_GET['sgender'];
		echo $gender;
	}
	else
	{
		//at least one of them has to be seleted
		if(isset($_GET['Submit']))
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

	if(isset($_GET['sdate']))
	{
		$day=(int)$_GET['sdate'];
		if($day>0 and $day<=31)
		{
			
		}
		else
		{
			$error="Invalid";
		}
		
	}
	if(isset($_GET['smonth']))
	{
		$month=(int)$_GET['smonth'];
		if($month>0 and $month<=12)
		{
			
		}
		else
		{
			$error="Invalid";
		}
	}
	if(isset($_GET['syear']))
	{
		$year=(int)$_GET['syear'];
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

function BloodGroup()
{
	if(isset($_GET['blood_group']))
		{
			echo $_GET['blood_group'];
		}
}

function Degree()
{
	if(isset($_GET['ssc']) || isset($_GET['hsc'])|| isset($_GET['bsc']) || isset($_GET['msc']))
		{
			if(isset($_GET['ssc']))
			{
				echo $_GET['ssc'];
			}
			if(isset($_GET['hsc']))
			{
				echo $_GET['hsc'];
			}
			if(isset($_GET['bsc']))
			{
				echo $_GET['bsc'];
			}
			if(isset($_GET['msc']))
			{
				echo $_GET['msc'];
			}
		}
		else
		{
			if(isset($_GET['Submit']))
			{
				echo " At least choose one";
			}
		}
}

function Profile()
{
$flag=true;
/*if(isset($_GET['sid']))
{
	$a=(int)($_GET['sid']);
	if ($a<1) 
	{
		$flag=false;
	}
}*/
if (isset($_GET['up'])) 
{
	$a=$_GET['up'];
	if(empty($a)) 
	{
		$flag=false;
	}
}

/*if(isset($_GET['Submit']))
{
	if ($flag==false) 
{
	echo "invalid";
}
else
{
	echo "Successful";
}
}*/
}

?>
<html>
<head>
	<title>Profile</title>
	<style>table{border-collapse:collapse;}</style>
</head>
<body>
	<form>
		<table width="50%" align="center" border="2" cellpadding="5">
			<tr>
				<td colspan="3" align="center"><h2>PERSON PROFILE</h2></td>
			</tr>
			<tr>
				<td width="100px" height="40px"> Name </td>
				<td ><input type="text" name="sname" ><?php Name();?></td>
				<td width="30px"></td>
			</tr>
			<tr>
				<td width="100px" height="40px"> Email </td>
				<td ><input type="email" name="semail" placeholder="sample@example.com" ><?php Email(); ?></td>
				<td width="30px"></td>
			</tr>
			<tr>
				<td width="100px" height="40px"> Gender </td>
				<td ><input type="radio" name="sgender"> Male
					<input type="radio" name="sgender"> Female
					<input type="radio" name="sgender"> Other
					<?php Gender(); ?>
				</td>
				<td width="30px"></td>
			</tr>
			<tr>
				<td width="100px" height="40px"> Date of Birth </td>
				<td >
					<input type="text" name="sday" size="3">/
					<input type="text" name="smonth" size="3">/
					<input type="text" name="syear" size="3">
					<i>(dd/mm/yyyy)</i>
					<?php DateOfBirth(); ?>
				</td>
				<td width="30px"></td>
			</tr>
			<tr>
				<td width="100px" height="40px"> Blood Group </td>
				<td >
					<select name="blood_group">
						<option value="">A+</option>
						<option value="">A-</option>
						<option value="">B+</option>
						<option value="">B-</option>
						<option value="">O+</option>
						<option value="">O-</option>
						<option value="">AB+</option>
						<option value="">AB-</option>
					</select>
					<?php BloodGroup(); ?>
				</td>
				<td width="30px"></td>
			</tr>
			<tr>
				<td width="100px" height="40px"> Degree </td>
				<td ><input type="checkbox" name="ssc"> SSC
					<input type="checkbox" name="hsc"> HSC
					<input type="checkbox" name="bsc"> BSc.
					<input type="checkbox" name="msc"> MSc.
					<?php Degree(); ?>
				</td>
				<td width="30px"></td>
			</tr>
			<tr>
				<td width="100px" height="40px"> Photo </td>
				<td >
					<input type="file" name="up" value="" placeholder="Browse">
					<?php Profile(); ?>
				</td>
				<td width="30px"></td>
			</tr>
			<tr>
				<td width="100px" height="40px" colspan="3"></td>
				
			</tr>
			<tr>
				<td width="100px" height="40px" colspan="3" align="right">
					<input type="submit" name="Submit" value="Submit">
					<input type="reset" name="" value="Clear">
				</td>
			</tr>
			
		</table>
	</form>
</body>
</html>