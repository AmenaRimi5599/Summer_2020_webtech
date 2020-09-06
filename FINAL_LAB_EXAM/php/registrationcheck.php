<?php 
	session_start();
	require_once('../service/userService.php');

	if(isset($_POST['submit'])){
		$authorname =$_POST['name'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$contact 		= $_POST['number'];

		if(empty($authorname) || empty($username) || empty($password) || empty($contact)){
			header('location: ../views/registration.php?error=null_value');
			//echo "invalid";
		}
		else
		{

			$user = [
				'name' =>$authorname,
				'username'=> $username,
				'password'=> $password,
				'number'=> $contact
			];

			$status = insert($user);
			if($status){
				header('location: ../views/login.php?success=registration_done');
			}else{
				header('location: ../views/registration.php?error=db_error');
			}
		
	



?>