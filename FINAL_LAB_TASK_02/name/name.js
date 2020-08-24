function validateName()
{
	var fname = document.getElementById('name1').value;
	var n = fname.length;
	var letters = /^[A-Za-z.-]+$/;

	if (fname == "")
	{
		alert("name must be filled up");
		return false;
	}

	if(n < 2)
	{
		alert("name should be more than 2 character");
		return false;
	}

	if(fname.match(letters))
	{
		return true;
	}
	else
	{
		alert("Invalid Name");
		return false;
	}

}