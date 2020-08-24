<!DOCTYPE html>
<html>
<head>
	<title>Blood_Group Form</title>
	<script type="text/javascript" src="bg.js"></script>
</head>
<body>
	<form action="bgcheck.php" onsubmit="return validateBloodGroup()" method="post">
		Blood_Group: <select name="blood_group">
			<option id="1">A+</option>
			<option id="2">A-</option>
			<option id="3">B+</option>
			<option id="4">B-</option>
			<option id="5">AB+</option>
			<option id="6">AB-</option>
			<option id="7">O+</option>
			<option id="8">O-</option>
		</select><br>
		<dir id="disp"></dir>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>