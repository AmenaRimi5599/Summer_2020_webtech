<!DOCTYPE html>
<html>
<head>
	<title>Date Of Birth</title>
	<script type="text/javascript" src="dob.js"></script>
</head>
<body>
	<form action="dobcheck.php" method="post">
		<fieldset>
			Date of Birth
			<br>
			<table>
				<tr>
					<td width="50px">dd</td>
					<td width="50px">mm</td>
					<td>yyyy</td>
				</tr>
			</table>
			<input type="text" id="id1" name="date" size="3">/
			<input type="text" id="id2" name="month" size="3">/
			<input type="text" id="id3" name="year" size="3"><br>
			<hr>
			<div id="check"></div>
			<input type="submit" onclick="validateDOB()" name="submit">
		</fieldset>
	</form>
</body>
</html>