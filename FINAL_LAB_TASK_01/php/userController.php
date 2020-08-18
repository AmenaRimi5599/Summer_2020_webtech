<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');


	//add user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/registration.php?error=null_value');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email
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

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/edit.php?id={$id}');
		}else{

			$user = [
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

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/edit.php?id={$id}');
		}else{

			$user = [
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

	if(isset($_POST['create_com'])){
		$com_name 	 = $_POST['company_name'];
		$description = $_POST['profile_description'];
		$industry 	 = $_POST['industry'];
		$website 	 = $_POST['website'];
		$logo 		 = $_POST['logo'];
		$accid 	     = $_POST['accountid'];

		if(empty($com_name) || empty($description) || empty($industry) ||  empty($website) ||  empty($logo) || empty($accid)){
			header('location: ../views/create_company.php?error=null_value');
			echo "null_value";
		}else{

			$company = [
				'company_name'=> $com_name,
				'profile_description'=> $description,
				'industry'=> $industry,
				'website'=> $website,
				'logo'=> $logo,
				'accountid'=> $accid
			];

			$status = insertCompany($company);

			if($status){
				header('location: ../views/companyInfo.php?success=done');
			}else{
				header('location: ../views/create_company.php?error=db_error');
			}
		}
	}

	if(isset($_POST['com_edit'])){

		$com_name 	 = $_POST['company_name'];
		$description = $_POST['description'];
		$industry 	 = $_POST['industry'];
		$website 	 = $_POST['website'];
		$logo 		 = $_POST['logo'];
		$accid 	     = $_POST['accid'];
		$id          =$_POST['id'];

		if(empty($com_name) || empty($description) || empty($industry) || empty($website) || empty($logo) || empty($accid)){
			header('location: ../views/company_edit.php?id={$id}');
		}else{

			$company = [
				'company_name'   => $com_name,
				'profile_description'=> $description,
				'industry'   => $industry,
				'website'    => $website,
				'logo'       => $logo,
				'accid'     => $accid,
				'id'        =>$id
			];

			$status = updateCom($company);

			if($status){
				header('location: ../views/companyInfo.php?success=done');
			}else{
				header('location: ../views/company_edit.php?id={$id}');
			}
		}
	}


?>