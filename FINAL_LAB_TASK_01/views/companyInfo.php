<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Company List</title>
</head>
<body>
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">Logout</a>
	<h3>Company list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>CompanyName</td>
			<td>Profile_Description</td>
			<td>Industry</td>
			<td>Company_Website</td>
			<td>Company_Logo</td>
			<td>AccountId</td>
			<td></td>
		</tr>

		<?php  
			$company = getAllCompany();
			for ($i=0; $i != count($company); $i++) {  ?>
		<tr>
			<td><?=$company[$i]['id']?></td>
			<td><?=$company[$i]['company_name']?></td>
			<td><?=$company[$i]['profile_description']?></td>
			<td><?=$company[$i]['industry']?></td>
			<td><?=$company[$i]['company_website']?></td>
			<td><img width="100px" height="100px" src="<?=$company[$i]['company_logo']?>"></td>
			<td><?=$company[$i]['user_account_id']?></td>

			<td>
				<a href="company_edit.php?id=<?=$company[$i]['id']?>">Edit</a> |
				<a href="company_delete.php?id=<?=$company[$i]['id']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>
<!--<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="../views/companyCreate.php">Create Company</a><br>
	<?php  
			$company = getAllCompany();
			for ($i=0; $i != count($company); $i++) {  ?>
		<tr>
			<td><?=$company[$i]['id']?></td>
			<td><?=$company[$i]['username']?></td>
			<td><?=$company[$i]['password']?></td>
			<td><?=$company[$i]['email']?></td>
			<td><?=$company[$i]['type']?></td>
			<td>
				<a href="edit.php?id=<?=$company[$i]['id']?>">Edit</a> |
				<a href="delete.php?id=<?=$company[$i]['id']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?> 

</body>
</html>-->