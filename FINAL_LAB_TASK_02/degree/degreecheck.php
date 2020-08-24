<?php

		if(isset($_POST['submit']))
		{
			if(!empty($_POST['ssc']))
			{
			echo $_POST['ssc']." ";
			}
			else
			{
				echo "";
			}
			if(!empty($_POST['hsc']))
			{
			echo $_POST['hsc']." ";
			}
			else
			{
				echo "";
			}
			if(!empty($_POST['bsc']))
			{
			echo $_POST['bsc']." ";
			}
			else
			{
				echo "";
			}
		    //echo $_POST['hsc']." ";
		    //echo $_POST['bsc']." ";
		   
			//echo $sscs."  ".$hsc." ".$hsc;
			
			
		}
	

?>