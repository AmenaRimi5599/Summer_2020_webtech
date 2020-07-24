<!DOCTYPE html>
<html>
<head>
	<title>Upload Picture</title>
</head>
<body>
	<form method="get">
		<fieldset>
			Profile Picture
			<br>
			User Id:  <input type="text" name="sid"><br>
			Picture:  <input type="file" name="up"><br>
			<input type="submit" name="Submit">
		</fieldset>
	</form>
<?php
$flag=true;
if(isset($_GET['sid']))
{
	$a=(int)($_GET['sid']);
	if ($a<1) 
	{
		$flag=false;
	}
}
if (isset($_GET['up'])) 
{
	$a=$_GET['up'];
	if(empty($a)) 
	{
		$flag=false;
	}
}

if(isset($_GET['Submit']))
{
	if ($flag==false) 
{
	echo "invalid";
}
else
{
	echo "Successful";
}
}

?>
</body>
</html>