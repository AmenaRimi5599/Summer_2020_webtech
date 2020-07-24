<?php
	if(isset($_GET['semail']))
	{
		$email=$_GET['semail'];
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