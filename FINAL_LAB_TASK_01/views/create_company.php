<?php
	require_once('../php/session_header.php');
	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add company</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Create New Company</legend>
			<table>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="company_name"></td>
				</tr>
				<tr>
					<td>Profile Description</td>
					<td><input type="text" name="profile_description"></td>
				</tr>
				<tr>
					<td>Industry</td>
					<td><input type="text" name="industry"></td>
				</tr>
				<tr>
					<td>Company Website</td>
					<td><input type="text" name="website"></td>
				</tr>
				<tr>
					<td>Company Logo</td>
					<td><input type="file" name="logo"></td>
				</tr>
				<tr>
					<td>Account ID</td>
					<td><input type="text" name="accountid"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="create_com" value="Create"> 
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>