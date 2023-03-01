<?php 
		
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "customers";

		$conn = mysqli_connect($hostname, $username, $password, $dbname);

		if(isset($_POST['submit'])){
	    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['gender']) && !empty($_POST['email']) && !empty($_POST['mobileno']) && !empty($_POST['address1']) && !empty($_POST['vehicletype']) && !empty($_POST['vehiclebrand']) && !empty($_POST['color']) && !empty($_POST['regno']) && !empty($_POST['chassis']) && !empty($_POST['username']) && !empty($_POST['password']) )
	{
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$gender = $_POST['gender'];
			$voterid = $_POST['voterid'];
			$email = $_POST['email'];
			$mobileno = $_POST['mobileno'];
			$address1 = $_POST['address1'];
			$vehicletype = $_POST['vehicletype'];
			$vehiclebrand = $_POST['vehiclebrand'];
			$color = $_POST['color'];
			$regno = $_POST['regno'];
			$chassis = $_POST['chassis'];
			$username = $_POST['username'];
			$password = $_POST['password'];


			$sql = "insert into customer_table (FirstName, LastName, Gender, VoterID, Email, MobileNo, Address, Vehicle_type, Vehicle_brand, Color, Registration_no, Chassis, Username, Password) 
			values('$firstname','$lastname','$gender','$voterid','$email','$mobileno','$address1','$vehicletype','$vehiclebrand','$color','$regno','$chassis','$username','$password')";
			mysqli_query($conn,$sql);
	}
	//else{echo "all fields required"};
	}	
		//return $conn;

	
?>

