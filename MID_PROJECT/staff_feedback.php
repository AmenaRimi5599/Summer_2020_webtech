<!DOCTYPE html>
<php>
<head>
  <title></title>
</head>
<body>
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
  <tr >
    <td colspan="2" width="900px"><h2>X-HOTEL</h2> 
      <ul align="right"> Logged in as
        <a href="staff_page.php"><?=$_COOKIE['userName']?></a>|
        <a href="logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr height="300px">
  	<td>
		<ul>
			<p><a href="staffwork_schedule.php"> Work Schedule </a></p>
      <p><a href="room_service.php"> Room-Service List </a></p>
      <p><a href="staff_salary.php"> Salary </a> </p>
      <p><a href="staff_feedback.php"> Feedback </a></p>
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
           <?//php  while($data = mysqli_fetch_assoc($result)){ ?>
           <tr>
             <td><?//php echo $data['itemName'] ?></td>
             <td><?//php echo $data['picture'] ?></td>
             <td><?//php echo $data['detail'] ?></td>
             <!--<td><?//php echo $data['detail'] ?></td>
             <td><?//php echo $data['detail'] ?></td>-->
           </tr>
           <?//php } ?>
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