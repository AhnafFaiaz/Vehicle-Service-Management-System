<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer Registration</title>
	<script src="js/reg_validation.js"></script>
	<link rel="stylesheet" href="css/registration.css">
	<style>
		#filename {
			position: relative;
			top: 20px;
			left: 300px;
			font-weight: bolder;
		}
	</style>
</head>
	
<body>
<div class="bg">

	
	

<!DOCTYPE html>
<html> 

<body>

<center><h4 style="color:white;"> Customer Registration Form </h4></center>
	<form method="post" action="../controllers/registrationAction.php" novalidate onsubmit="return validate(this);">
	
	<fieldset>
	    <legend><p> Customer details</p> </legend>

		<label for="firstname"> First Name </label>
		<input type ="text" name="firstname" placeholder="First Name">
		<span id="firstnameErrMsg"></span>
		<br><br>
		
		<label for="lastname"> Last Name </label>
		<input type ="text" name="lastname" placeholder="Last Name">
		<span id="lastnameErrMsg"></span>
		<br><br>

		<label> Gender </label>
		<input type= "radio" name= "gender" value="male" id="male">
		<label for="male"> Male </label>

		<input type= "radio" name= "gender" value="female" id="female">
		<label for="female"> Female </label>
		
		<br><br>

		<label for="voterid"> Voter ID </label>
		<input type ="number" name="voterid" placeholder="Voter ID">
		<span id="voteridErrMsg"></span>
		<br><br>

		<label for="email"> Email </label>
		<input type ="email" name="email" id= "email" placeholder="Email">
		<span id="emailErrMsg"></span>
		<br><br>

		<label for="mobileno"> Mobile Number </label>
		<input type ="number" name="mobileno" id= "mobileno" placeholder="Mobile Number">
		<span id="mobilenoErrMsg"></span>
		<br><br>

		<label for="address1"> Address </label>
		<input type ="text" name="address1" id= "address1" placeholder="Address">
		<span id="address1ErrMsg"></span>
		<br><br>
		

	</fieldset>
	<br><br>

	<fieldset>

		<legend><p> Vehicle details </p></legend>

		<label for="vehicletype"> Vehicle Type </label>
		<select name="vehicletype" id= "vehicletype">
		<option value= "sed"> Sedan (car) </option>
		<option value= "micro"> Micro (car) </option>
		<option value= "hatch"> Hatchback (car) </option>
		<option value= "suv"> SUV (car) </option>
		<option value= "Moto1"> Motorcycle (below 100cc) </option>
		<option value= "Moto2"> Motorcycle (above 100cc) </option>
		<option value= "Moto3"> Motorcycle (above 155cc) </option>
		<option value= "other"> Others </option>
		</select>
		<br><br>


		<label for="vehiclebrand"> Vehicle Brand </label>
		<select name="vehiclebrand" id= "vehiclebrand">
		<option value= "toyota"> Toyota </option>
		<option value= "honda"> Honda </option>
		<option value= "hyundai"> Hyundai </option>
		<option value= "nissan"> Nissan </option>
		<option value= "mitsu"> Mitsubishi </option>
		<option value= "suzuki"> Suzuki </option>
		<option value= "yamaha"> Yamaha </option>
		<option value= "bajaj"> Bajaj </option>
		<option value= "tvs"> TVS </option>
		<option value= "other"> Others </option>
		</select>
		<br><br>

		<label for="color"> Vehicle Color </label>
		<select name="color" id= "color">
		<option value= "red"> Red </option>
		<option value= "black"> Black </option>
		<option value= "white"> White </option>
		<option value= "gray"> Gray </option>
		<option value= "blue"> Blue </option>
		<option value= "yellow"> Yellow </option>
		<option value= "green"> Green </option>
		<option value= "copper"> Copper </option>
		<option value= "other"> Others </option>
		</select>
		<br><br>

		<label for="regno"> Registration Number </label>
		<input type ="number" name="regno" id= "regno" placeholder="Registration Number">
		<span id="regnoErrMsg"></span>
		<br><br>

		<label for="chassis"> Chassis Number </label>
		<input type ="number" name="chassis" id= "chassis" placeholder="Chassis Number">
		<span id="chassisErrMsg"></span>
		<br><br>

		
	</fieldset>

	<br><br>
	<fieldset>
		<legend><p> Account Information </p></legend>
		<h5 style="color:red;"> Provide User Name and Password to create account</h5>
		<label for="username"> Username </label>
		<input type ="text" name="username" placeholder="Username">
		<span id="usernameErrMsg"></span>
		<br><br>

		<label for="password"> Password </label>
		<input type ="password" name="password" placeholder="Password">
		<span id="passwordErrMsg"></span>
		<br><br>


	<input type= "submit" name="submit" value="Sign-up">




</form>
<br><br>

</body>
</html>
	</form>
	<?php 

		if (isset($_SESSION['msg']) and !empty($_SESSION['msg'])) {
			echo $_SESSION['msg'];
		}
	?>


</body>
	<?php
       include "../views/footer.php";
    ?>
    </div>
</html>