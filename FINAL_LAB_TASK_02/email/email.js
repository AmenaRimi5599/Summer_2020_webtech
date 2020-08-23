function validateEmail()
{
	var femail = document.getElementById('email1').value;
	//var n = femail.length;

	if (femail == "")
	{
		alert("email must be filled up");
		return false;
	}
}
