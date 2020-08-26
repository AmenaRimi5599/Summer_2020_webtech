<?php
	if(isset($_POST['submit']))
	{
		if(isset($_POST['gender']))
		{
			echo $_POST['gender'];
		}
		else
		{
			header('location:gender.html');
			//return false;
		}
	}
?>