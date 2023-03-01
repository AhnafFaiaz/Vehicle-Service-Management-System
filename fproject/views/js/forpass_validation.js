function validate(pForm) {
	let flag = "";

	if (pForm.email.value === "") {
		document.getElementById("emailErrMsg").innerHTML = "Please fill up the email";
		flag = "Empty";
	}

	if (pForm.newPassword.value === "") {
		document.getElementById("newpassErrMsg").innerHTML = "Please fill up the New password";
		flag = "Empty";
	}

	if (flag === "") {
		return true;
	}
	return false;
}
  
/*function verifyPassword() {  
  var em = document.getElementById("email").value;  
  var pw = document.getElementById("newPassword").value; 
  //check empty password field  
  if(em == "") {  
     document.getElementById("emailErrMsg").innerHTML = "**Fill the email please!";  
     return false;  
  }  

   if(pw == "") {  
     document.getElementById("newpassErrMsg").innerHTML = "**Fill the password please!";  
     return false;  
  }  
   
  else {  
     alert("Password is correct");  
  }  
}  */
