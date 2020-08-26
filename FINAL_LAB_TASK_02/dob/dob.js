function validateDOB()
{
   var id1 = document.getElementById('id1').value;
   var id2 = document.getElementById('id2').value;
   var id3 = document.getElementById('id3').value;

      if((id1 !="" ) && (id2 !="") && (id3 !=""))
        {
          if((id1>0 && id1<32) && (id2>0 && id2<13) && (id3>1990 && id3<2016))
            {
              document.getElementById('check').innerHTML=""
              return true;
            }
            else
            {
              document.getElementById('check').innerHTML="Invalid date or month or year";
              return false;
            }
        }
        else
        {
              document.getElementById('check').innerHTML="Field can not be empty";
              return false;

        }
    }







//       if(!(Id1>0 && Id1<31))
//         {
//           alert("Invalid !!");
//           return false;
//         }
//       if(!(Id2>0 &&Id2<13))
//         {
//           alert("Invalid !!");
//           return false;
//         }
//       if(!(Id3>1900 &&Id2<2016))
//       {
//         alert("Invalid !!");
//         return false;
//       }
   
   

// }