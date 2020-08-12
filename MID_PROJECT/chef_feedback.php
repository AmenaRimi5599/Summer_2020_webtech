<?php
  $conn = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
  $result = mysqli_query($conn, 'select * from dummytable');
?>
<!DOCTYPE html>
<php>
<head>
  <title></title>
</head>
<body>
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
  <tr >
    <td colspan="2" width="900px"><h2>Xcompany</h2> 
      <ul align="right"> Logged in as
        <a href="chef_page.php"><?=$_COOKIE['userName']?></a>|
        <a href="logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr height="300px">
  	<td>
		<ul>
			<p><a href="my_recipe.php"> My Recipe </a></p>
      <p><a href="cook_book.php"> Cook-Book </a> </p>
      <p><a href="chef_order.php">Food Orders</a>
      <p><a href="inventory.php"> Inventory </a></p>
      <p><a href="chefwork_schedule.php"> Chef Work-Schedule </a></p>
      <p><a href="chef_salary.php"> Chef Salary </a> </p>
      <p><a href="chef_feedback.php"> Chef Feedback </a></p>
		</ul>
	</td>
	<td width="60%">
    <fieldset>
      <legend>Feedback</legend>
    	<form>
    		<table border="1" cellspacing="0" cellpadding="5" width="95%">
           <tr>
             <td>Topic</td>
             <td>Comments</td>
             <td>Rating</td>
           </tr>
           <?php  while($data = mysqli_fetch_assoc($result)){ ?>
           <tr>
             <td><?php echo $data['Topic'] ?></td>
             <td><?php echo $data['Comments'] ?></td>
             <td><?php echo $data['Rating'] ?></td>
           </tr>
           <?php } ?>
        </table>      
    	</form>
    </fieldset>
	</td>
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>
</body>
</html>