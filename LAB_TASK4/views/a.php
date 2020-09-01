<?php

	$name = $_POST['email'];

	$conn = mysqli_connect('localhost', 'root', '', 'web_tech');
	$sql= "select * from user_info where Email like '%{$email}%'";

	$result = mysqli_query($conn, $sql);

	$data = "<table border=1> 
				<tr>
					<td>ID</td>
					<td>Username</td>
					<td>Email</td>
				</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
			$data .= "<tr>
							<td>{$row['id']}</td>
							<td>{$row['userName']}</td>
							<td>{$row['Email']}</td>
					</tr>";
	}

	$data .= "</table>";

	echo $data;

?>