 <?php
   

	if ($_SERVER["REQUEST_METHOD"] == "POST"and count($_REQUEST)>0) {

		 $customerOrderId=$_POST['customerOrderId'];
         $feedbackFile=$_POST['feedbackFile'];

		if (empty($customerOrderId)||empty( $feedbackFile)) 
			{
				$isValid = false;
				echo "<br>";
				echo "<br>";
				echo"<center>";
				echo"<h2>";
				echo "Please fill up the form properly";
				echo"</center>";
				echo"</h2>";
				echo"<br><br>";
				$submitted=false;
			}
			else {
				$isValid = true;
				echo "<br>";
				echo "<br>";
				echo"<center>";
				echo"<h2>";
				echo "Submitted Successfully";
				echo"</center>";
				echo"</h2>";
				echo"<br><br>";
				$submitted=true;
			}
		

		if ($isValid) { 
			
			$handle = fopen("../Data/feedback.json", "a");
			$arr = array('customerOrderId' => $customerOrderId,'feedbackFile' =>$feedbackFile);
			$encode = json_encode($arr);

			$res = fwrite($handle, $encode . "\n");
		}
		else
		{
			$res=false;
		}
	
			
    }

    ?>

    <?php 

    /*if(isset($_POST['submit'])){
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
		*/
    ?>

    <?php

    include "../models/feedback_connection.php";
    ?>