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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
  <link rel="stylesheet" href="css/home.css">

</head>
	
<body>
  
	
  <center><h1> Vehicle Service Management System </h1></center>
 <center><a href="../views/home.php">Home</a> &nbsp &nbsp <a href="../views/servicelist.php">Service List</a> &nbsp &nbsp <a href="../views/customerProfile.php">Profile</a> &nbsp &nbsp <a href="../views/changePassword.php">Change Password</a>&nbsp &nbsp</a> &nbsp &nbsp<a href="../views/aboutus.php">About Us</a> &nbsp &nbsp <a href="../views/feedback.php">Give Feedback</a> &nbsp &nbsp<a href="../controllers/Logout.php">Logout</a></center>
    
    <h2> Welcome, <br> <?php echo $_SESSION['username']; ?></h2>

    <?php
    
    echo "<center>";
    echo "<p>";
    echo "<h3>";
    //echo $_SESSION['username'];
    /*$conn = connect();

    if ($conn) {

      $sql = "SELECT username FROM customer_table WHERE username = '" . $username . "' and password = '" . $password . "'";

      $res = mysqli_query($conn, $sql);

      if (mysqli_num_rows($res) === 1) 
        return true;
      return false;
    }*/
    echo "</h3>";
    echo"</p>";
   ?>
   <br>
   <h2><center>Get the best service <br> in town! </center></h2> 
   


</body>
<?php
       include "../views/footer.php";
    ?>
    
</html>