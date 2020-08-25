function validate()
{

	var fname = document.getElementById('name1').value;
  var name = false;
	//var n = fname.length;
	//var letters = /^[A-Za-z.-]+$/;

	if (fname == "")
	{
		//alert("name must be filled up");
    document.getElementById("nmsg").innerHTML="Field cannot be empty !!";
		name = false;
	}
  else
  {
    if((fname[0]>='A' && fname[0]<='Z') || (fname[0]>='a' && fname[0]<='z'))
    {
      if(fname.length>=2)
      {
        var i=0;
        while(i<fname.length)
        {
          if(!((fname[i]>='A' && fname[i]<='Z') || (fname[i]>='a' && fname[i]<='z') || fname[i]=='.' || fname[i]=='-' ))
          {
            //alert("Invalid");
            document.getElementById("nmsg").innerHTML="name should contain A-Z or a-z";
            name = false;
          }
          i=i+1;
        }
        name = true;
      }
      else
      {
        //alert("name too short");
        document.getElementById('nmsg').innerHTML="name too short";
        name = false;
      }
    }
    else
    {
      //alert("Invalid");
      document.getElementById('nmsg').innerHTML="Invalid";
      name = false;
    }
  }
  //return false;
	




	var femail = document.getElementById('email1').value;
	//var n = femail.length;
  var email =false;

	if (femail == "")
	{
		//alert("email must be filled up");
    document.getElementById('emsg').innerHTML="email must be filled up";
		email = false;
	}

  var gender = false;
  if(document.getElementById('gen1').checked) 
  { 
                //document.getElementById("disp").innerHTML =
      document.getElementById("gen1").value ;
      gender = true;
                    //+ " radio button checked"; 
                    //alert("Male selected");
    } 
    else if(document.getElementById('gen2').checked) { 
               // document.getElementById("disp").innerHTML= 
         document.getElementById("gen2").value;
         gender = true; 
                   // + " radio button checked";
                    //alert("Female selected");   
       } 
    else if(document.getElementById('gen3').checked) { 
                //document.getElementById("disp").innerHTML= 
                     document.getElementById("gen3").value ;
                     gender = true;
                    //+ " radio button checked";
                    //alert("Other selected");
            } 
    else { 

            document.getElementById("gmsg").innerHTML="no option selected";
            gender = false; 
                    //= "No option selected"; 
                    //alert("No option is selected");
            } 
        
  var dob = false;
   var Id1 = document.getElementById('id1').value;
   var Id2 = document.getElementById('id2').value;
   var Id3 = document.getElementById('id3').value;

      if((Id1 =="" ) && (Id2 =="") && (Id3 ==""))
        {
          //alert("Invalid Date of Birth");
          document.getElementById('dobmsg').innerHTML="Invalid Date Of Birth";
          dob = false;
        }
        else
        {
          if(!(Id1>0 && Id1<31))
           {
            //alert("Invalid !!");
            document.getElementById('id1').innerHTML="invalid date";
            dob = false;
           }
          if(!(Id2>0 &&Id2<13))
            {
              //alert("Invalid !!");
              document.getElementById('id2').innerHTML="invalid month";
              dob = false;
            }
         if(!(Id3>1900 &&Id3<2016))
           {
             //alert("Invalid !!");
             document.getElementById('id3').innerHTML="invalid year";
             dob = false;
            }
        }
      
   



            
	var bg = document.getElementById('blood_group').value;
  var bg1 = false;

    if(bg !="")
    {
        bg1 = true;
    }
    else
    {
        document.getElementById('disp').innerHTML = "Value can't be empty";
        bg = false;
    }

		


    var degree = false;
  if(document.getElementById('deg1').checked) { 
                
                     document.getElementById("deg1").innerHTML="" ;
                     degree = true;
                     
                    
            } 
  else if(document.getElementById('deg2').checked) { 
               
                     document.getElementById("deg2").innerHTML="";
                     degree =true; 
                     
            } 
  else if(document.getElementById('deg3').checked) { 
               
                     document.getElementById("deg3").innerHTML="" ;
                     degree = true;
                  
            } 
  else { 
                
                    //alert("No option is selected");
                    document.getElementById('dmsg').innerHTML="no option is selected";
                    degree = false;
            } 
        
	
		


	//var id = document.getElementById('id2').value;
	var pic = document.getElementById('pic1').value;
  var picture = false;

	if( pic != "")
	{
		//if(parseInt(id,10)>0)
		//{
			//return true;
		//}
		//else
		//{
			//document.getElementById('disp').innerHTML="enter valid id";
			//return false;
		//}
	//}
	//else
	//{
		document.getElementById('dis').innerHTML="";
		picture = true;
	}
  else
  {
    document.getElementById('dis').innerHTML="select a picture";
    picture = false;
  }

  if(name && email && gender && dob && degree && picture)
  {
    return true;
  }
  else
  {
    return false;
  }
}



  function removeName()
  {
    var name = document.getElementById('name1').value;
    if(name != "")
    {
      document.getElementById('nmsg').innerHTML="";
    }
  }

  function removeEmail()
  {
    var email = document.getElementById('email1').value;
    if(email != "")
    {
      document.getElementById('nmsg').innerHTML="";
    }
  }
  function removeGender()
  {
    
      document.getElementById('gmsg').innerHTML="";
    
  }
  function removeDob()
  {
    var d = document.getElementById('id1').value;
    var m = document.getElementById('id2').value;
    var y = document.getElementById('id3').value;
    if(d != "" && m != "" && y != "")
    {
      document.getElementById('dobmsg').innerHTML="";
    }
  }

  function removeDegree()
  {
      document.getElementById('dmsg').innerHTML="";
    
  }

   function removeProfile()
  {
      document.getElementById('dis').innerHTML="";
    
  }



	
		


