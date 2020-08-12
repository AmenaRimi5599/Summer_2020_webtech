
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

  <tr height="300px" align="center">
  	<td>
		<ul>
			<p><a href="my_recipe.php"> My Recipe </a></p>
            <p><a href="cook_book.php"> Cook-Book </a> </p>
            <p><a href="chef_order.php">Food Orders</a>
            <p><a href="inventory.php"> Inventory </a></p>
            <p><a href="chefwork_schedule.php"> Work-Schedule </a></p>
            <p><a href="chef_salary.php"> Salary </a> </p>
            <p><a href="chef_feedback.php"> Feedback </a></p>
		</ul>
	</td>
	<!--<td width="60%">
		<form>
            <fieldset>
    <legend><b>EDIT PROFILE</b></legend>
    <form method="post">
        <br/>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="name" type="text" ></td>
                <td></td>
            </tr>

            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td><input type="radio" name=""> Male
                    <input type="radio" name=""> Female
                    <input type="radio" name=""> Other
                </td>
                <td></td>
            </tr>

            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" type="email">
                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
                </td>
                <td></td>
            </tr>

            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <fieldset>
                    <legend>Date of Birth</legend>    
                    <input type="text" size="2" name="day" >/
                    <input type="text" size="2" name="month" >/
                    <input type="text" size="3" name="year" >
                    <font size="2"><i>(dd/mm/yyyy)</i></font>
                </fieldset>
            </tr>
        </table>
        <hr/>
        <input type="submit" name="submit" value="Submit">
        <input type="reset">
    </form>
</fieldset>
        </form>
	</td>-->
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>

</body>
</html>