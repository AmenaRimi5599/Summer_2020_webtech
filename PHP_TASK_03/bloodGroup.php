<!DOCTYPE html>
<html>
<head>
	<title>Blood_Group Form</title>
</head>
<body>
	<form method="get">
		Blood_Group: <select name="blood_group">
			<option>A+</option>
			<option>A-</option>
			<option>B+</option>
			<option>B-</option>
			<option>AB+</option>
			<option>AB-</option>
			<option>O+</option>
			<option>O-</option>
		</select><br>
		<input type="submit" name="Submit">
	</form>
	<?php
		if(isset($_GET['blood_group']))
		{
			echo $_GET['blood_group'];
		}
		/*else
		{
		 	# code...
		 	if(isset($_GET['Submit']))
		 		{
		 			echo "Please select one option";
		 		}
		} */
	 ?>
</body>
</html>