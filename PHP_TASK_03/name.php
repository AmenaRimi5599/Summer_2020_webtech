<!DOCTYPE html>
<html>
<head>
  <title>Name</title>
</head>
<body>
  <form method="get">
    Name:  <input type="text" name="sname"><br>
    <input type="submit" name="Submit">
  </form>

<?php
$error = "";
$name = "";

  if (isset($_GET['sname'])) 
  {
    $name=$_GET['sname'];
      if (empty($name)) 
      {
        $error = "Invalid";
      }
      else 
      {
        $name =$_GET["sname"] ;
    
        if (!preg_match("/^[a-zA-Z ]*$/",$name ) )
        {
            $error = "Invalid";
        }
        if (strlen($name) < 2)
        {
            $error = "Invalid";
        }
      }
  }
  if($error == "")
      echo $name;
  else
      echo "Invalid";
?>

</body>
</html>