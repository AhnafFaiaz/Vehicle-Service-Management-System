function validate(pForm) {
	let flag = "";

	if (pForm.firstname.value === "") {
		document.getElementById("firstnameErrMsg").innerHTML = "Please fill up the firstname";
		flag = "Empty";
	}

	if (pForm.lastname.value === "") {
		document.getElementById("lastnameErrMsg").innerHTML = "Please fill up the lastname";
		flag = "Empty";
	}

	if (pForm.voterid.value === "") {
		document.getElementById("voteridErrMsg").innerHTML = "Please fill up the voterid";
		flag = "Empty";
	}

	if (pForm.email.value === "") {
		document.getElementById("emailErrMsg").innerHTML = "Please fill up the email";
		flag = "Empty";
	}

	if (pForm.mobileno.value === "") {
		document.getElementById("mobilenoErrMsg").innerHTML = "Please fill up the mobileno";
		flag = "Empty";
	}

	if (pForm.address1.value === "") {
		document.getElementById("address1ErrMsg").innerHTML = "Please fill up the address";
		flag = "Empty";
	}

	if (pForm.regno.value === "") {
		document.getElementById("regnoErrMsg").innerHTML = "Please fill up the registration number";
		flag = "Empty";
	}

	if (pForm.chassis.value === "") {
		document.getElementById("chassisErrMsg").innerHTML = "Please fill up the chassis number";
		flag = "Empty";
	}

	if (pForm.username.value === "") {
		document.getElementById("usernameErrMsg").innerHTML = "Please fill up the username";
		flag = "Empty";
	}

	if (pForm.password.value === "") {
		document.getElementById("passwordErrMsg").innerHTML = "Please fill up the password";
		flag = "Empty";
	}

	if (flag === "") {
		return true;
	}
	return false;

}
