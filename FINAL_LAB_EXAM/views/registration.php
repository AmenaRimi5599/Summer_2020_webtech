<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form action="regCheck.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>AuthorName</td>
					<td><input type="text" id="name" name="name"></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td><input type="text" id="number" name="number"></td>
				</tr>
				<tr>
					<td>UserName</td>
					<td><input type="text" id="username" name="username"></td>
					<!-- <td id="emailmsg"></td> -->
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="submit" value="Submit" onclick="f1()">
						<a href="login.php" style="display: none">Login</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>