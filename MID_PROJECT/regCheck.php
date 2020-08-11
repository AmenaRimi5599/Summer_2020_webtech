<?php
    if(isset($_POST['submit'])){
    	$conn = mysqli_connect('localhost', 'root', '', 'webtech');

        $name     = $_POST['name'];
	    $uname    = $_POST['userName'];
	    $userType = $_POST['userType'];
	    $email    = $_POST['email'];
	    $password = $_POST['pass'];
        $dob      = $_POST['day']."/".$_POST['month']."/".$_POST['year'];
    
        $query = "INSERT INTO userinfo (Name, UserName, Email, Password, DOB, UserType) VALUES ('$name', '$uname', '$email', '$password',    '$dob', '$userType')";
        $result = mysqli_query($conn, $query);

        header('location: login.php');
    }
    else
    {
    	echo "sorry!!";
    }
?>