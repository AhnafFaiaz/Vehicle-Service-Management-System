<?php

		//$handle = fopen("../Data/data.json", "r");
		//$data = fread($handle, filesize("../Data/data.json"));
	?>



<?php
        
		//$explode = explode("\n", $data);


	
	?>


	<?php

		/*$arr= array();
		for ($i = 0; $i < count($explode)-1; $i++)
		{
			$json=json_decode(($explode[$i]));
			array_push($arr, $json);
		}*/
	?>

	<?php
  

   /* if ($_SERVER["REQUEST_METHOD"] == "POST"and count($_REQUEST)>0) {


      $index="";
      for($k = 0;$k< count($arr); $k++)
      {
        
        if(($_POST['email'] === $arr[$k]-> email))
        {
          $index=$k;
          
        }

      }  
    if (empty($_POST['email'])||empty($_POST['newPassword'])) 
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

          if(($_POST['email'])===($arr[$index]-> email)){

          $arr[$index]-> password=$_POST['newPassword'];


          $handle= fopen("../Data/data.json", "w");



           for ($i=0; $i<count($explode)-1;$i++)
           {
              $encode = json_encode($arr[$i]);
              $res = fwrite($handle, $encode . "\n");
           }
           header(" ../views/login.php");

        }
    
    }  

  }*/

  ?>
   
  <?php
include ("../models/forpass_connection.php");

if (isset($_POST["email"])){

  $email = $_POST ['email'];
  
  $newPassword = $_POST ['newPassword'];
 if ($email <> $email){
    echo "Email doesn't match!!";
  }

  
  else{
    $sql = "SELECT Email FROM customer_table WHERE Email = '$email'";
    $result=$conn -> query($sql);
    if (mysqli_num_rows($result)>0)
    {
      $sql="UPDATE customer_table SET Password= '$newPassword' WHERE Email = '$email'";
        if($conn -> query($sql)){echo "password changed";}
        else{echo "invalid";}
    }
    else{echo "invalid";}
  }
}

?>