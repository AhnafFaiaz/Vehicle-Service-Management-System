<?php 
		$firstname = "";
		$firstnameErrMsg = "";
		$lastname = "";
		$lastnameErrMsg = "";
		$gender = "";
		$genderErrMsg = "";
		$voterid = "";
		$voteridErrMsg = "";
		$email = "";
		$emailErrMsg = "";
		$mobileno = "";
		$mobilenoErrMsg = "";
		$address1 = "";
		$address1ErrMsg = "";
		$vehicletype = "";
		$vehiclebrand = "";
		$color = "";
		$regno = "";
		$regnoErrMsg = "";
		$chassis = "";
		$chassisErrMsg = "";
		$username = "";
		$usernameErrMsg = "";
		$password = "";
		$passwordErrMsg = "";
		$isValid = false;
		
		



		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test_input($data) {
				$data = htmlspecialchars($data);
				return $data;
			}

			$firstname = test_input($_POST['firstname']);
			$lastname = test_input($_POST['lastname']);
			$gender = isset($_POST['gender']) ? test_input($_POST['gender']) : "";
			$voterid = test_input($_POST['voterid']);
			$email = test_input($_POST['email']);
			$mobileno = test_input($_POST['mobileno']);
			$address1 = test_input($_POST['address1']);
			$vehicletype = isset($_POST['vehicletype']) ? test_input($_POST['vehicletype']) : "";
			$vehiclebrand = isset($_POST['vehiclebrand']) ? test_input($_POST['vehiclebrand']) : "";
			$color = isset($_POST['color']) ? test_input($_POST['color']) : "";
			$regno = test_input($_POST['regno']);
			$chassis = test_input($_POST['chassis']);
			$username = test_input($_POST['username']);
			$password = test_input($_POST['password']);
			


			$message = "";
			if (empty($firstname)) {
				//$firstnameErrMsg = "First Name is Empty";
			}
			else {
				if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
				$firstnameErrMsg = "Only letters and spaces allowed.";
				}
			}

			$message = "";
			if (empty($lastname)) {
				$lastnameErrMsg = "Last Name is Empty";
			}
			else {
				if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
				$lastnameErrMsg = "Only letters and spaces allowed.";
				}
			}
			

			
			if (empty($gender)) {
				$genderErrMsg = "Gender not selected";
			}
			
			
			if (empty($voterid)|| strlen($_POST['voterid']) != 10 || preg_match('@[A-Z]@', $voterid) || preg_match('@[a-z]@', $voterid)) {
				$voteridErrMsg = "Please enter a valid voter ID number!(length should be 10)";
				
			}

			$message = "";
			if (empty($email)) {
				$emailErrMsg = "Email is Empty";
				
			}
			else {
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$message .= "Please correct email.";
					$message .= "<br>";
				}
			}

			
			if (empty($mobileno) || !preg_match("/^[0-9]{11}$/", $mobileno)) {
				$mobilenoErrMsg = "Please enter a valid Phone Number!(length should be 11)";
				
			}

			
			if (empty($address1)) {
				$address1ErrMsg = "Address is Empty";
				
			}

			$message = "";
			if (!isset($vehicletype) or empty($vehicletype)) {
				$message .= "vehicle Type not Seletect";
				$message .= "<br>";
			}

			$message = "";
			if (!isset($vehiclebrand) or empty($vehiclebrand)) {
				$message .= "Vehicle Brand not Seletect";
				$message .= "<br>";
			}

			$message = "";
			if (!isset($color) or empty($color)) {
				$message .= "Color not Seletect";
				$message .= "<br>";
			}

			
			if (empty($regno) || !preg_match("/^[0-9]{6}$/", $regno)) {
				$regnoErrMsg = "Invalid Registration Number (length should be 6)";
				
			}

			
			if (empty($chassis) || !preg_match("/^[0-9]{12}$/", $chassis)) {
				$chassisErrMsg = "Invalid Chassis Number (length should be 12)";
				
			}

			$message = "";
			if (empty($username)) {
				$usernameErrMsg = "User Name is Empty";
			}
			/*else {
				if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
				$usernameErrMsg = "Only letters and spaces allowed.";
				}
			}*/

			$message  = "";
    		if (empty($password) || !preg_match("/^[0-9]{8}$/", $password)) {
        	$passwordErrMsg = 'Password should be at least 8 characters in length and should include at least one number!';
        	
    		} 
    		/*else {
        	$password = $_POST['password'];
    		}*/

			if ($_SERVER['REQUEST_METHOD'] === "POST"and count($_REQUEST)>0) {
			if (empty($firstname)||empty($lastname)||empty($_POST['gender'])||empty($voterid)||empty($email)||empty($mobileno)||empty($address1)||empty($_POST['vehicletype'])||empty($_POST['vehiclebrand'])||empty($_POST['color'])||empty($regno)||empty($chassis)||empty($username)||strlen($password) < 8) {
				$isValid = false;
				echo "Registration Unsuccessful";
				header("Location: ../views/registration.php");
			}
			else {
				$isValid = true;
				//echo "Registration Successful. Now Please log-in";
				header("Location: ../views/login.php");
				
			}
		}

		

	}
	if ($isValid) { 
			
			$handle = fopen("../Data/data.json", "a");
			$arr = array('firstname' => $firstname,'lastname' => $lastname,'gender' => $_POST['gender'],'voterid' => $voterid,'email' => $email,'mobileno' => $mobileno,'address1'=>$address1,'vehicletype'=>$_POST['vehicletype'],'vehiclebrand'=>$_POST['vehiclebrand'],'color'=>$_POST['color'],'regno' => $regno,'chassis' => $chassis,'username'=>$username,'password'=>$password);
			$encode = json_encode($arr);

			$res = fwrite($handle, $encode . "\n");
		}
		else
		{
			$res=false;
		}

		
	?>
	<?php
	include "../models/Connection.php";

    ?>