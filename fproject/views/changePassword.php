<?php
    session_start();
    if (count($_SESSION)===0)
    {
      header("../controllers/Logout.php");
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title> Change Password </title>
    <script src="js/changepass_validation.js"></script>
    <link rel="stylesheet" href="css/forgotpass.css">

</head>

<body>

<center><h1 style="color:teal;"> Change Password Page  </h1></center>

	<center><a href="../views/home.php">Home</a> &nbsp &nbsp <a href="../views/servicelist.php">Service List</a> &nbsp &nbsp <a href="../views/customerProfile.php">Profile</a> &nbsp &nbsp <a href="../views/changePassword.php">Change Password</a>&nbsp &nbsp</a> &nbsp &nbsp<a href="../views/aboutus.php">About Us</a> &nbsp &nbsp <a href="../views/feedback.php">Give Feedback</a> &nbsp &nbsp<a href="../controllers/Logout.php">Logout</a></center>
    <br>


  <form action="" method="POST" novalidate onsubmit="return validate(this);">
    <div class="center">
  	<fieldset>
  		<legend><h2>Change Password</h2></legend>
  Username <input type="text" name="username" id = 'username' Placeholder="Username" >
  <span id="usernameErrMsg"></span>
  <br><br>
  Old Password <input type="text" name="oldpass" id = 'oldpass' Placeholder="Old password">
  <span id="oldpassErrMsg"></span>
  <br><br>
  New Password <input type="text" name="newPassword" id = 'newPassword' Placeholder="New Password">
  <span id="newpassErrMsg"></span>
  <br><br>
  <input type= "submit" name="submit" value="Change">
</fieldset>
</div>
  </form>

  <?php
  include "../controllers/changePasswordAction.php";
  ?>
   
    
<br><br>
	
</body>
    <?php
       include "../views/footer.php";
    ?>
</html>