<?php
	// cannot be empty
	if(isset($_GET['semail']))
	{
		$email=$_GET['semail'];
		//must be valid
		if($email=="")
		{
			echo "Invalid Email";
		}
		else
		{
			echo $email;
		}
	}
?>