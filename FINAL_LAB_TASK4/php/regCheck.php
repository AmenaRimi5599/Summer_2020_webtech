<?php 
	//session_start();
	require_once('../service/userService.php');

	//if(isset($_POST['submit'])){

		$username 	= $_POST['name'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		// if(empty($username) || empty($password) || empty($email)){
		// 	//header('location: ../views/register.php?error=null_value');
		// 	echo "invalid";
		// }else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email
			];

			$status = insert($user);
			echo $status;

			// if($status){
			// 	header('location: ../views/login.php?success=registration_done');
			// }else{
			// 	header('location: ../views/register.php?error=db_error');
			// }
		
	



?>