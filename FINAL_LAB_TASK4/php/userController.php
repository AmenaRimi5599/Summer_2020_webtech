<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');


	//add user
	if(isset($_POST['create'])){
		$author_name=$_POST['name']
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$contact 		= $_POST['number'];

		if(empty($author_name) || empty($username) || empty($password) || empty($contact)){
			header('location: ../views/create.php?error=null_value');
		}else{

			$user = [
				'name'=>$author_name,
				'username'=> $username,
				'password'=> $password,
				'number'=> $contact
			];

			$status = insert($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/create.php?error=db_error');
			}
		}
	}

	//update user
	if(isset($_POST['edit'])){

		$author_name=$_POST['name'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$contact 		= $_POST['number'];
		$id 		= $_POST['id'];

		if(empty($author_name) || empty($username) || empty($password) || empty($contact)){
			header('location: ../views/edit.php?id={$id}');
		}else{

			$user = [
				'name'=>$author_name,
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = update($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
	}

	if(isset($_POST['delete'])){

		$author_name=$_POST['name'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$contact 		= $_POST['number'];
		$id 		= $_POST['id'];

		if(empty($author_name) || empty($username) || empty($password) || empty($contact)){
			header('location: ../views/edit.php?id={$id}');
		}else{

			$user = [
				'name' =>$author_name,
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = delete($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
	}

?>