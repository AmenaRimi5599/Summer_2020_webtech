function validateProfile()
{
	var id = document.getElementById('id1').value;
	var pic = document.getElementById('pic1').value;

	if(id != "" && pic != "")
	{
		if(parseInt(id,10)>0)
		{
			return true;
		}
		else
		{
			document.getElementById('disp').innerHTML="enter valid id";
			return false;
		}
	}
	else
	{
		document.getElementById('disp').innerHTML="cannot be empty";
		return false;
	}
}