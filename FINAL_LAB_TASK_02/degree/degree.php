<!DOCTYPE html>
<html>
<head>
	<title>Degree Form</title>
	<script type="text/javascript" src="degree.js"></script>
</head>
<body>
	<form action="degreecheck.php" method="post">
		<fieldset>
		Degree:  <input type="checkbox" id="deg1" name="ssc" value="SSC"> SSC
				 <input type="checkbox" id="deg2" name="hsc" value="HSC"> HSC
		         <input type="checkbox" id="deg3" name="bsc" value="BSC"> BSC<br>
		         <hr>
		         <input type="submit" onclick="validateDegree()" name="submit" value="Submit">
		</fieldset>
	</form>
	<div id="disp"></div>
</body>
</html>

