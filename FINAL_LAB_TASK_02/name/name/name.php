<!DOCTYPE html>
<html>
<head>
  <title>Name</title>
  <script type="text/javascript" src="name.js"></script>
</head>
<body>
  <form action="name.php" onsubmit="return validateName()" method="post">
  	<?=$_POST['name']?>
  	<fieldset>
  		
  		 Name:  <input type="text" id="name1" name="name"><br>
                <input type="submit" name="submit" >
  	</fieldset>
   
  </form>
  </body>
  </html>