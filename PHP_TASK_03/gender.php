<?php
	if(isset($_GET['sgender']))
	{
		$gender=$_GET['sgender'];
		echo $gender;
	}
	else
	{
		//at least one of them has to be seleted
		if(isset($_GET['Submit']))
		{
			echo "Please select at least one gender";
		}
	}