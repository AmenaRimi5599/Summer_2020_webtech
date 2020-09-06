<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form action="regCheck.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>AuthorName</td>
					<td><input type="text" id="name" name="name"></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td><input type="text" id="number" name="number"></td>
				</tr>
				<tr>
					<td>UserName</td>
					<td><input type="text" id="username" name="username"></td>
					<!-- <td id="msg"></td> -->
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="submit" value="Submit">
						<a href="login.php">Login</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<!-- <script type="text/javascript">
		function f1() {
			
			var name=document.getElementById('name').value;
			var username=document.getElementById('username').value;
			var password=document.getElementById('password').value;
			var contact=document.getElementById('number').value;


			if(name!="" && username!="" && password!="" && contact!="" && document.getElementById('msg').innerHTML=="")
			{
				//alert("works");
				var xhttp = new XMLHttpRequest();
			xhttp.open('POST', '../php/registrationcheck.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('name='+name+'&'+'password='+password+'&'+'username='+username+'&'+'number='+contact);

			xhttp.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200){

				if(this.responseText != ""){
					document.getElementById('emailmsg').innerHTML = this.responseText;
				}else{
					document.getElementById('emailmsg').innerHTML = "";
				}
				
			}	
			}
				document.getElementsByTagName('a')[0].style.display='inline';
			}
		}
	</script> -->
</body>
</html>