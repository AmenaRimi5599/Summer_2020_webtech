function validateName()
{
	var fname = document.getElementById('name1').value;
	var n = fname.length;

	if (fname == "")
	{
		alert("name must be filled up");
		return false;
	}

	if(n < 2)
	{
		alert("name should be more than 2 character");
	}

	/*if((fname[0]>='A' && fname[0]<='Z') || (fname[0]>='a' && fname[0]<='z'))
	{
		var i = 0;

				while(i< n)
				{
					if(fname[i]<'A' && fname[i]!=' ' && fname[i]!='.' && fname[i]!='-')
					{
						alert("Invalid Name");
						break;
					}
					elseif (fname[i]>'Z') 
					{
						if(fname[i]<'a')
						{
							alert("Invalid Name");
							break;
						}
						elseif (fname[i]>'z') {
							alert("Invalid Name");
							break;
						}
					}
					i=i+1;
				}
	}*/
}