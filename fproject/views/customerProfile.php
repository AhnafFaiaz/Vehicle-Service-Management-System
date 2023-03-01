<?php
session_start();
include_once '../models/profile_connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <form method="POST">
    <center> <h1 style="color:teal;"> Profile Page  </h1> </center>
  <center><a href="home.php">Home</a> &nbsp &nbsp <a href="servicelist.php">Service List</a>  &nbsp &nbsp <a href="changePassword.php">Change Password</a>&nbsp &nbsp</a> &nbsp &nbsp<a href="aboutus.php">About Us</a> &nbsp &nbsp <a href="feedback.php">Give Feedback</a> &nbsp &nbsp<a href="../controllers/Logout.php">Logout</a></center>
    <br> 
    <h2> <?php echo $_SESSION['username']; ?>, Your Profile </h2>
    <h4>
    <?php
    
        if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM customer_table WHERE Username = '$_SESSION[username]';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "First name: " . $row["FirstName"]. "<br>".  "LastName: " . $row["LastName"]. "<br>". "Gender: " . $row["Gender"]. "<br>" . "Voter ID: " . $row["VoterID"]. "<br>". "Email: " . $row["Email"]. "<br>". "Mobile No.: " . $row["MobileNo"]. "<br>". "Address: " . $row["Address"]. "<br>". "Vehicle Type: " . $row["Vehicle_type"]. "<br>". "Vehice_brand: " . $row["Vehicle_brand"]. "<br>". "Color: " . $row["Color"]. "<br>". "Registration No.: " . $row["Registration_no"]. "<br>". "Chassis: " . $row["Chassis"] . "<br>". "Your ID: " . $row["id"];
  }
} else {
  echo "You have no profile! Sorry";
}



mysqli_close($conn);
?>
</h4>
</body>
<?php
       include "../views/footer.php";
    ?>
</html>