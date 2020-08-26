 function validateGender()
 {
  if(document.getElementById('gen1').checked || document.getElementById('gen2').checked ||document.getElementById('gen3').checked) 
  {
    document.getElementById('disp').innerHTML="" ;
    return true;
  }
  else { 
    document.getElementById("disp").innerHTML="no option selected";
    return false;
  } 
}