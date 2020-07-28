<?php
	session_start();

	if(isset($_POST['Submit']))
	{
		$name=$_POST['uname'];
		$password=md5($_POST['password']);

		if(empty($name) || empty($password))
		{
			echo "Invalid submission";
		}
		elseif (isset($_COOKIE['uname']) && isset($_COOKIE['password'])) 
		{
			if($name == $_COOKIE['uname'] && $password == $_COOKIE['password'])
			{
				setcookie('status',"OK",time()+3600,'/');
				header('location:home.php');
			}
			else
			{
				header('location:login.php?message=Invalid password/username');
			}
		}
		else
		{
			echo "Record not found";
		}
	}
	else
	{
		header('location: login.php?message=error');
	}
	?>