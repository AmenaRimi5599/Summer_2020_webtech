<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$company = getByComID($_GET['id']);	
	}else{
		header('location: companyInfo.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Company</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Delete Company</legend>
			<table>
				<table>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="company_name" value="<?=$company['company_name']?>"></td>
				</tr>
				<tr>
					<td>Profile Description</td>
					<td><input type="text" name="description" value="<?=$company['profile_description']?>"></td>
				</tr>
				<tr>
					<td>Industry</td>
					<td><input type="text" name="industry" value="<?=$company['industry']?>"></td>
				</tr>
				<tr>
					<td>Website</td>
					<td><input type="text" name="website" value="<?=$company['company_website']?>"></td>
				</tr>
				<tr>
					<td>Logo</td>
					<td><p><input type="file" name="logo"></td><img height="128px" src="<?=$company['company_logo']?>"></p>
				</tr>
				<tr>
					<td>Account ID</td>
					<td><input type="text" name="accid" value="<?=$company['user_account_id']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$company['id']?>">
						<input type="submit" name="com_delete" value="Delete"> 
						<a href="companyInfo.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>