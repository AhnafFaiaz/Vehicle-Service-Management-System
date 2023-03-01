<?php
/*
		$handle = fopen("../Data/data.json", "r");
		$data = fread($handle, filesize("../Data/data.json"));
	?>

<?php
        
		$explode = explode("\n", $data);

	?>


	<?php

		$arr= array();
		for ($i = 0; $i < count($explode)-1; $i++)
		{
			$json=json_decode(($explode[$i]));
			array_push($arr, $json);
		}
	?>


  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"and count($_REQUEST)>0) {


			$index="";
			for($k = 0;$k< count($arr); $k++)
			{
				
				if(($_SESSION['username'] === $arr[$k]-> username))
				{
					$index=$k;
					
				}

             
			}

  
      if (empty($_POST['previousPassword'])||empty($_POST['newPassword'])) 
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
        
      }

      if($isValid){

          if(($_POST['previousPassword'])===($arr[$index]-> password)){

          	$arr[$index]-> password=$_POST['newPassword'];


        	$handle= fopen("../Data/data.json", "w");



            for ($i=0; $i<count($explode)-1;$i++)
           {
              $encode = json_encode($arr[$i]);
              $res = fwrite($handle, $encode . "\n");
           }
           
        }
    
    }  

  }*/
  ?>


<?php

//session_start();
/*include_once('../models/changepass_connection.php');

if (isset($_POST['submit'])){
  $username = $_POST ['username'];
  $oldpass = $_POST['oldpass'];
  $newPassword = $_POST ['newPassword'];

  $query = mysqli_query($conn,"SELECT Username,Password from customer_table where Username = '$username' AND Password = '$oldpass'");
  $num = mysqli_fetch_array($query);

  if($num>0){
    mysqli_query($conn,"UPDATE customer_table SET Password = '$newPassword' WHERE Username = '$username'");
    //$_SESSION ['msg1'] = "Password Changed Successfully";
  }
  else{
    $_SESSION ['msg1'] = "Password doesn't match";
  }
  }*/

  ?>

<?php
//session_start();
include ("../models/changepass_connection.php");


if (isset($_POST["submit"])){

  $username = $_POST ['username'];
  //$usernameErrMsg = "";
  $oldpass = $_POST['oldpass'];
  //$oldpassErrMsg = "";
  $newPassword = $_POST ['newPassword'];
  //$newpassErrMsg = "";
  //if ($newPassword == $oldpass){
    //echo "password matched!!";
  //}

  
  //else{
    $sql = "SELECT * FROM customer_table WHERE Username = '$username' AND Password = '$oldpass'";
    $result=$conn -> query($sql);
    if (mysqli_num_rows($result)>0)
    {
      $sql="UPDATE customer_table SET Password= '$newPassword' WHERE Username = '$username'";
        if($conn -> query($sql)){echo "password changed";}
        //else{echo "invalid";}
    }
    else{echo "invalid";}
  //}
}

?>