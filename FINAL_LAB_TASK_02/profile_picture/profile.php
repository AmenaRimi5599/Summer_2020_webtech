<!DOCTYPE html>
<html>
<head>
	<title>Upload Picture</title>
	<script type="text/javascript" src="profile.js"></script>
</head>
<body>
	<form action="profilecheck.php" onsubmit=" return validateProfile()" method="post">
		<fieldset>
			Profile Picture
			<br>
			User Id:  <input type="text" id="id1"  name="id"><br>
			Picture:  <input type="file" id="pic1" name="up"><br>
			<div id="disp"></div>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>