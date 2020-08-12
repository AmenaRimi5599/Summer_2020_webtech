<!DOCTYPE html>
<html>
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
      <p><a href="chefwork_schedule.php">Chef Work-Schedule </a></p>
      <p><a href="chef_salary.php">Chef Salary </a> </p>
      <p><a href="chef_feedback.php">Chef Feedback </a></p>
		</ul>
	</td>
	<td width="60%">
    <fieldset>
      <legend>INVENTORY</legend>
    	<form>
    		<table border="1" cellspacing="0" cellpadding="5" width="95%">
           <tr>
             <td width="150px">Product</td>
             <td width="75px">Amount In Unit</td>
             <td width="75px">Count</td>
             <td width="85px">Unit Price</td>
             <td width="85px">Total Cost</td>
           </tr>
           <?//php  while($data = mysqli_fetch_assoc($result)){ ?>
           <tr>
             <td height="150px"><?//php echo $data['itemName'] ?></td>
             <td><?//php echo $data['picture'] ?></td>
             <td><?//php echo $data['detail'] ?></td>
             <td><?//php echo $data['detail'] ?></td>
             <td><?//php echo $data['detail'] ?></td>
           </tr>
          

           <?//php } ?>
           
           <tr>
             <td colspan="5" height="40px" align="right">
              <p> Product Name <input type="text" name=""></p> 

            <p> amount <input type="text" name=""></p> 
            <a href="inventory_update.php">Update Inventory</a>
            <input type="submit" name="submit">
             </td>
          
           </tr>
           
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