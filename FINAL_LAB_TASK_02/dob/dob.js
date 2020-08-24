function validateDOB()
{
   var Id1 = document.getElementById('id1').value;
   var Id2 = document.getElementById('id2').value;
   var Id3 = document.getElementById('id3').value;

      if(Id1=="" || Id2 =="" ||Id3 =="")
        {
          alert("Invalid Date of Birth");
          return false;
        }
      if(!(Id1>0 && Id1<31))
        {
          alert("Invalid !!");
          return false;
        }
      if(!(Id2>0 &&Id2<13))
        {
          alert("Invalid !!");
          return false;
        }
      if(!(Id3>1900 &&Id2<2016))
      {
        alert("Invalid !!");
        return false;
      }
   
   

}