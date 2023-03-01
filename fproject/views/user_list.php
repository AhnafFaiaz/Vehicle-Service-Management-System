<?php
 	session_start();
 	if (!isset($_SESSION['username']) or empty($_SESSION['username'])) {
 		header("../views/login.php");
 	}  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User List</title>
</head>
<body>

	<h1>List of User</h1>

	<br><br>

	<?php 

		if (isset($_SESSION['user_list'])) {
			var_dump($_SESSION['user_list']);
		}
	?>

	<br><br>

	<a href="../views/home.php">Back</a>

	<a href="../controllers/Logout.php">Logout</a>

</body>
</html>