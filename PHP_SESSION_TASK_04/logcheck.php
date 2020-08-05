<?php
	session_start();
	

	if(isset($_POST['submit'])){

		$uname 		= $_POST['username'];
		$password 	= md5($_POST['password']);

		if(empty($uname) || empty($password) ){
			echo "null submission found!";
		}else{
			if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
				if($uname == $_COOKIE['username'] && $password == md5($_COOKIE['password'])){
					
					setcookie('status', "OK", time()+3600, '/');
					header('location: dashBoard.php');

				}else{
					header('location: login.php?msg=invalid_username/password');
				}
			}else{
				echo "Invalid!";
			}
		}	

	}else{
		header('location: login.php?msg=submit_button_error');
	}
?>