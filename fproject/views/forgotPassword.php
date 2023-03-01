
<!DOCTYPE html>
<html>
<head>
    
    <title>Forget Password </title>
    <script src="js/forpass_validation.js"></script>
    <link rel="stylesheet" href="css/forgotpass.css">
</head>

<body>

  <center><a href="../views/login.php">Back to Log-in page</a></center>
  <form action="" method="post" novalidate onsubmit="return validate(this);">
    <center><h1 style="color:teal;"> Forgot Password?  </h1></center>
    <div class="center">
  	<fieldset>
  		<legend><h2>Change Password</h2></legend>
  <center>Previous Email:<input type="text"name="email"Placeholder="Email"></center>
  <center><span style="color:black;" id="emailErrMsg"></span></center>
  <br>
  <br>

  <center><p style="color:red;"> New Password: <input type="text"name="newPassword"Placeholder="New Password"></p></center>
  <center><span style="color:black;"id="newpassErrMsg"></span></center>
  <br>
  <br>
  <center><input type="submit" name="submit" value="Done"></center>
</fieldset>
</div>
  </form>
  <?php
  include "../controllers/forgotPasswordAction.php";
  ?>
    
<br><br>
	
</body>
<?php
    include "../views/footer.php";
?>
</html>