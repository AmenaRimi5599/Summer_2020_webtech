<?php
	session_start();

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$uname = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$gender = $_POST['gender'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];

		if(empty($uname) || empty($password) || empty($email) || empty($name) || empty($confirmPassword) || empty($gender) || empty($day) 
			|| empty($month) || empty($year))
		{
			echo "submit all".'<a href="home.php"><u>Home</a>';
		}
		else 
		{

			if($password!=$confirmPassword)
			{
				echo "password and confirm password didn't match!".'<a href="home.php"><u>Home</a>';
			}
			else
			{

			$user = ['username'=> $uname,
			         'email'=> $email,
			         'password'=> $password
			        ];

			$_SESSION['username']   = $uname;
			$_SESSION['email'] 		= $email;
			$_SESSION['password'] 	= $password;
			$_SESSION['user'] 		= $user;

			setcookie('name', $name, time()+3600, '/');
			setcookie('username', $uname, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');
			setcookie('password', $password, time()+3600, '/');
			setcookie('gender', $gender, time()+3600, '/');
			setcookie('day', $day, time()+3600, '/');
			setcookie('month', $month, time()+3600, '/');
			setcookie('year', $year, time()+3600, '/');
			

			echo "set";

			header('location: login.php');
			}
		}

	}else{
		echo "not set";
}
?>