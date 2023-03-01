function validate(pForm) {
	let flag = "";

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



