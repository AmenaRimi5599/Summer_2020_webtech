<!DOCTYPE html>
<html>
<head>
	<title>Email Form</title>
	<script type="text/javascript" src="email.js"></script>
</head>
<body>
	<form action="emailcheck.php" onsubmit="return validateEmail()" method="post">
		
		<fieldset>
		E-mail:  <input type="email" id="email1" name="email" placeholder="anything@example.com"><br>
		<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>