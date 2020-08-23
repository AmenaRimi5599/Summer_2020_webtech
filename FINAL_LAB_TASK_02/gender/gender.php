<!DOCTYPE html>
<html>
<head>
	<title>Gender Form</title>
	<script type="text/javascript" src="gender.js"></script>
</head>
<body>
	<form  action="gendercheck.php" method="post" onsubmit="validateGender()">
		Gender:     <input type="radio" id="gen1" name="gender" value="Male"> Male
					<input type="radio" id="gen2" name="gender" value="Female"> Female
					<input type="radio" id="gen3" name="gender" value="other"> Other<br>
					<input type="submit" onclick="validateGender()" name="submit" value="Submit"> 
	</form>
	<div id="disp">
	</div>

</body>
</html>