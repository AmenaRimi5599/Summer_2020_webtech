function validateName()
{



var fname = document.getElementById('name1').value;
  //var name = false;
	//var n = fname.length;
	//var letters = /^[A-Za-z.-]+$/;

	if (fname == "")
	{
		alert("name must be filled up");
    //document.getElementById("nmsg").innerHTML="Field cannot be empty !!";
		//name = false;
		return false;
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
            alert("Invalid");
            //document.getElementById("nmsg").innerHTML="name should contain A-Z or a-z";
            //name = false;
            return false;
          }
          i=i+1;
        }
        return true;
      }
      else
      {
        alert("name too short");
        //document.getElementById('nmsg').innerHTML="name too short";
        //name = false;
        return false;
      }
    }
    else
    {
      alert("Invalid");
     // document.getElementById('nmsg').innerHTML="Invalid";
      //name = false;
      return false;
    }
  }
}
  //return false;