<!DOCTYPE html>
<html>
<head>
	<title>Degree Form</title>
</head>
<body>
	<?php
		if(isset($_GET['ssc']) || isset($_GET['hsc'])|| isset($_GET['bsc']))
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
		}
		else
		{
			if(isset($_GET['Submit']))
			{
				echo " At least choose one";
			}
		}
	?>
	<form method="get">
		Degree:  <input type="checkbox" name="ssc" value="SSC"> SSC
		<input type="checkbox" name="hsc" value="HSC"> HSC
		<input type="checkbox" name="bsc" value="SSC"> BsC<br>
		<input type="submit" name="Submit">
	</form>
</body>
</html>