<!DOCTYPE html>
<html>
<head>
	<title>Date Of Birth</title>
</head>
<body>
	<form method="get">
		<fieldset>
			Date of Birth
			<br>
			<table>
				<tr>
					<td width="50px">dd</td>
					<td width="50px">mm</td>
					<td>yyyy</td>
				</tr>
			</table>
			<input type="text" name="sdate" size="3" required="">/
			<input type="text" name="smonth" size="3" required="">/
			<input type="text" name="syear" size="3" required=""><br>
			<input type="submit" name="Submit">
		</fieldset>
	</form>

	<?php
	$error="";
	$day="";
	$month="";
	$year="";

	if(isset($_GET['sdate']))
	{
		$day=(int)($_GET['sdate']);
		if($day<0 and $day>31)
		{
			$error="Invalid";
		}
		
	}
	if(isset($_GET['smonth']))
	{
		$month=(int)($_GET['smonth']);
		if($month<0 and $month>12)
		{
			$error="Invalid";
		}
	}
	if(isset($_GET['syear']))
	{
		$year=(int)($_GET['syear']);
		if($year<1900 and $year>2016)
		{
			$error="Invalid";
		}
	}
	
	if(isset($_GET['Submit']))
	{
		if($error == "")
	{
		echo $day."<br>";
		echo $month."<br>";
		echo $year."<br>";
	}
	else
	{
		echo "Invalid";
	}
	}

?>
</body>
</html>