<?php
    session_start();
    if (count($_SESSION)===0)
    {
      header("../controllers/Logout.php");
    }
?>

<!DOCTYPE html>
<head>
   <title>About Us</title>
   <link rel="stylesheet" href="css/aboutus.css">
</head>
<center><h1 style="color:teal;"> About Us </h1></center>
<br><br>
<center><a href="../views/home.php">Home</a> &nbsp &nbsp <a href=" ../views/servicelist.php">Service List</a> &nbsp &nbsp <a href="../views/customerProfile.php">Profile</a> &nbsp &nbsp <a href="../views/changePassword.php">Change Password</a> &nbsp &nbsp <a href="../views/feedback.php">Give Feedback</a>&nbsp &nbsp<a href="../controllers/Logout.php">Logout</a></center>
<br>

<body>
	<div class="aboutus">
	<center><p style="color:purple;"> Vehicle Service Management System started the journey in 2022. It is located in Dhaka, Bangladesh. We can provide you the best service in Bangladesh. Vehicle service management system has the largest service center and it makes our company more time-saving and efficient.
 We also provide 100% original spare parts for both Motorcycle and Car. We believe in delivering operational excellence to meet commitments. Furthermore, with diversification and a variation of products, it has earned a prestigious reputation among everyone as the distributor of premium quality services. </p> </center>
</div>
</body>
<?php
    include "../views/footer.php";
?>
</html>
