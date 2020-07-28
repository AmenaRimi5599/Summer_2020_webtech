<?php

	session_start();

	if(isset($_POST['Submit']))
	{
		$name = $_POST['uname'];
		$uname = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cpassword = $_POST['confirmPassword'];
		$gender = $_POST['gender'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];

		if(empty($name) || empty($uname)) || empty($email) || empty($password) || empty($cpassword) || empty($gender) || empty($day) || empty($month) || empty($year)
		{
			echo "Incomplete submission".'<a href="home.php"><u>Home</a>';
		}
		else
		{
			if($password != $cpassword)
			{
				echo "Password is matched".'<a href="home.php"><u>Home</a>';
			}
			else
			{
				$user = ['username' => $uname,
						'email' => $email,
						'password' => $password];

				$_SESSION['username'] = $uname;
				$_SESSION['email'] = $email;
				$_SESSION['password'] = $password;
				$_SESSION['user'] = $user;


				setcookie('username', $uname, time()+3600, '/');
				setcookie('email', $email, time()+3600, '/');
				setcookie('password', $password, time()+3600, '/');
				setcookie('gender', $gender, time()+3600, '/');
				setcookie('day', $day, time()+3600, '/');
				setcookie('month', $month, time()+3600, '/');
				setcookie('year', $year, time()+3600, '/');
				setcookie('uname', $name, time()+3600, '/');

				header('location:login.php');

			}
		}

	}
	else
	{
		echo "Not set";
	}
	?>