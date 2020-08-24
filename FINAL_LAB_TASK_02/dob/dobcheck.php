<?php


if (isset($_POST['submit']))
 {
 $dob=$_POST['date']."/".$_POST['month']."/".$_POST['year'];

 if($_POST['date']==""|| $_POST['month']=="" ||$_POST['year']=="")
 {
   echo "data not found!!";
 }
 else{
   echo $dob;
 }
 
}
?>
