
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
    		<table border="0" cellspacing="5" cellpadding="5" width="95%" align="center">
           <tr>
             <td width="200px">Product Name</td>
             <td><input type="text" name="product" size="30%"></td>
           </tr>
           <tr>
             <td >Amount in Unit</td>
             <td><input type="text" name="amount" size="30%"></td>
           </tr>
           <tr>
             <td >Count</td>
             <td><input type="text" name="count" size="30%"></td>
           </tr>
           <tr>
            <td colspan="2">
             <hr>
           </td>
           </tr>
           <tr>
             <td colspan="2" align="right">
               <input type="submit" name="submit" value="update">
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