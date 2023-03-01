<!DOCTYPE html>
<html>
<head>

    <title>Give feedback</title>
    <link rel="stylesheet" href="css/forgotpass.css">

</head>

<body>
    
	<center><h1 style="color:teal;"> Feedback </h1></center>
	<center><a href="../views/home.php">Home</a> &nbsp &nbsp <a href="../views/servicelist.php">Service List</a> &nbsp &nbsp <a href="../views/customerProfile.php">Profile</a> &nbsp &nbsp <a href="../views/changePassword.php">Change Password</a>&nbsp &nbsp</a> &nbsp &nbsp<a href="../views/aboutus.php">About Us</a>  &nbsp &nbsp<a href="../controllers/Logout.php">Logout</a></center>
    <br>
     <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
      <div class="center">
    	<fieldset>
    		<legend><h4>Give us a feedback</h4></legend>
		
		<p><b>Customer Order Id:&nbsp &nbsp &nbsp</b> <input type="number" name="customerOrderId"placeholder="Customer Order Id">
		<br><br>
		 <p><b>Write here:</b></p>
		 <textarea name="feedbackFile"></textarea>
     <br><br>
		 <input type="submit" name="feedback" value="submit">
	</fieldset>
</div>
	</form>


  <?php
      include "../controllers/feedbackFileAction.php";
  ?>
       
</body>
<?php
       include "../views/footer.php";
    ?>
</html>