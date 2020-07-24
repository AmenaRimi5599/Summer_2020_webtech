<!DOCTYPE html>
<html>
<head>
  <title>Name</title>
</head>
<body>
  <form method="post">
    Name:  <input type="text" name="sname"><br>
    <input type="submit" name="Submit">
  </form>

<?php
$error = "";
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sname"])) 
  {
    $error = "Invalid";
  }
  else 
  {
    $name = test_input($_POST["sname"] );
    
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

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  return $data;
}
?>

<?php
if($error == "")
    echo $name;
else
  echo "Invalid";
?>

</body>
</html>