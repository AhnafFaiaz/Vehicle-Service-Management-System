<?php 
	//session_start();

	if (isset($_SESSION['username'])) {
		header("Location:../views/home.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<script src="js/login_validation.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
 	
<body>

	<h1>Login</h1>
	<div class="login">
	 <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php }
         ?>
	<?php

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

	<form action="" method="post" novalidate onsubmit="return validate(this);">


		<label id="username">Username:</label>
		<input type="text" name="username" id="username">
		<span id="usernameErrMsg"></span>
		<br><br>

		<label id="password">Password:</label>
		<input type="password" name="password" id="password">
		<span id="passwordErrMsg"></span>
		<br><br>

		<center><input type="submit" name="submit" value="Login"></center>
		<h3>Forgotten password? <a href="../views/forgotPassword.php"> Click here </a> to create new password</h3>

		<h3>Want to register and create an account? <a href="../views/registration.php"> Click here </a> to create new account</h3>
		
	</form>
	
	<?php
       include "../controllers/LoginAction.php";
 	?>
	

	<?php 

		if (isset($_SESSION['msg']) and !empty($_SESSION['msg'])) {
			echo $_SESSION['msg'];
		}
	?>

	
</div> 
</body>
	<?php
       include "../views/footer.php";
    ?>
</html>