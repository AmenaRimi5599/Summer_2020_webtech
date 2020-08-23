function validateGender() {
            if(document.getElementById('gen1').checked) { 
                //document.getElementById("disp").innerHTML =
                     document.getElementById("gen1").value ;
                    //+ " radio button checked"; 
                    //alert("Male selected");
            } 
            else if(document.getElementById('gen2').checked) { 
               // document.getElementById("disp").innerHTML= 
                     document.getElementById("gen2").value; 
                   // + " radio button checked";
                    //alert("Female selected");   
            } 
            else if(document.getElementById('gen3').checked) { 
                //document.getElementById("disp").innerHTML= 
                     document.getElementById("gen3").value ;
                    //+ " radio button checked";
                    //alert("Other selected");
            } 
            else { 
                //document.getElementById("disp").innerHTML 
                    //= "No option selected"; 
                    alert("No option is selected");
            } 
        } 
	
		


