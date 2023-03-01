<?php 
		
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "customers";

		$conn = mysqli_connect($hostname, $username, $password, $dbname);

		if(isset($_POST['feedback'])){
	    if(!empty($_POST['customerOrderId']) && !empty($_POST['feedbackFile']) )
	{
			$customerOrderId = $_POST['customerOrderId'];
			$feedbackFile = $_POST['feedbackFile'];
			


			$sql = "insert into feedback_table (cus_id,feedback) 
			values('$customerOrderId','$feedbackFile')";
			mysqli_query($conn,$sql);
	}
	//else{echo "all fields required"};
	}	
		//return $conn;

	
?>

