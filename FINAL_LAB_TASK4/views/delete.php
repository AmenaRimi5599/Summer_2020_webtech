<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$user = getByID($_GET['id']);	
	}else{
		header('location: all_users.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Delete User</legend>
			<table>
				<tr>
					<td>Author Name</td>
					<td><input type="text" id="name" name="name" value="<?=$user['authorname']?>"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" id="username" name="username" value="<?=$user['username']?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password" value="<?=$user['password']?>"></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><input type="text" id="number" name="number" value="<?=$user['contactnumber']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><font color="red"><b>Are you sure want to delete ?</b></font></td>
					<td>
						<input type="hidden" name="id" value="<?=$user['id']?>">
						<input type="submit" name="delete" value="Delete"> 
						<a href="all_users.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>