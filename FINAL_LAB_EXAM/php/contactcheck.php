<?php 
	session_start();
	require_once('../service/userService.php');


	if(isset($_POST['username'])){

		$status=checkEmail($_POST['username']);
		if($status)
		{
			echo "UserName is available !!";
		}		
	}

?>