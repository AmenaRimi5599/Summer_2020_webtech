<?php 
  if(isset($_POST['picture'])){

    $pic = $_POST['picture'];
  }
 ?>
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
		<form action="recipe_check.php" method="post">
            <fieldset>
                <legend>My Recipe</legend>
            		<section align="center">
            			<img src="<?= $pic ?>"  align="center" height="128px" width="128px">
            			<p><input type="file" name="picture" value=""></p>

            		<hr/>
            		<h3>Ingredients</h3>
            		<textarea rows="5" cols="50" name="ingredient">
            		</textarea>
            		<hr/>
            		<h3>Process</h3>
            		<textarea rows="5" cols="100" name="process"> </textarea>
            		<hr/>
            		<div align="right">
            			<input type="submit" name="submit" value="DONE">
            		</div>
            		</section>
            </fieldset>
        </form>
	</td>
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>
</body>
</html>