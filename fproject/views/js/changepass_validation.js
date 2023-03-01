function validate(pForm) {
	let flag = "";

	if (pForm.username.value === "") {
		document.getElementById('usernameErrMsg').innerHTML = "Please fill up the username";
		flag = "Empty";
	}

	if (pForm.oldpass.value === "") {
		document.getElementById('oldpassErrMsg').innerHTML = "Please fill up the Old password";
		flag = "Empty";
	}

	if (pForm.newPassword.value === "") {
		document.getElementById('newpassErrMsg').innerHTML = "Please fill up the New password";
		flag = "Empty";
	}

	if (flag === "") {
		return true;
	}
	return false;
}

/*function validation(){

 

    let x = document.forms["form"]["username"].value;
    if (x == "") {
      document.getElementById('usernameErrMsg').innerHTML="**username Pass must be filled";
      return false;
    }
    
       
    let y = document.forms["form"]["oldpass"].value;
    if (y == "") {
      document.getElementById('oldpassErrMsg').innerHTML="**Old pass must be filled";
      return false;
    }

    let z = document.forms["form"]["newPassword"].value;
    if (z == "") {
      document.getElementById('newpassErrMsg').innerHTML="**New pass must be filled";
      return false;
    }
    
  
    }*/