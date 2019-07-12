function checkPassword()
             {     
                pswd = document.getElementById("newpassword").value;
                repswd = document.getElementById("confirmpassword").value;
                if (pswd == '') 
                    alert ("Please enter Password"); 
                       
                else if (repswd == '') 
                    alert ("Please enter confirm password"); 
                           
                else if (pswd != repswd) { 
                   alert ("\nPassword did not match: Please try again...");
                    return false; 
                }
                else{ 
                    return true; 
                } 
            }

