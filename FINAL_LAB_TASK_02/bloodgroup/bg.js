function validateBloodGroup() 
{
            
	var bg = document.getElementById('blood_group').value;

    if(bg !="")
    {
        return true;
    }
    else
    {
        document.getElementById('disp').innerHTML = "Value can't be empty";
        return false;
    }
}
		


