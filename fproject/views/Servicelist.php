<?php
    session_start();
    if (count($_SESSION)===0)
    {
      header("../controllers/Logout.php");
    }
?>

<!DOCTYPE html>
<head>
   <title>Services</title>
   <link rel="stylesheet" href="css/servicelist.css">
 
</head>
<center><a href="../views/home.php">Back to home page</a></center>
<br>
<center><h1 style="color:teal;"> Service List </h1></center>
<body>
<h2 style="color:darkblue;">Bike Services</h2>
<table>
  <tr>
    <th>Code</th>
    <th>Category</th>
    <th>Cost</th>
  </tr>
  <tr>
    <td>0011</td>
    <td>Silver(Full engine check, 10-parts check and adjustment and wash) </td>
    <td>800</td>
  </tr>
  <tr>
    <td>0012</td>
    <td>Gold (Full engine check, 17-parts check and adjustment and wash)</td>
    <td>1000</td>
  </tr>
  <tr>
    <td>0013</td>
    <td>Platinum (Full engine check, 25-parts check and adjustment, wash and polish)</td>
    <td>2000</td>
  </tr>
</table>

<h2 style="color:darkblue;">Car Services</h2>

<table>
  <tr>
    <th>Code</th>
    <th>Category</th>
    <th>Cost</th>
  </tr>
  <tr>
    <td>0021</td>
    <td>Silver(All parts check, air filter, type pressure and wash) </td>
    <td>800</td>
  </tr>
  <tr>
    <td>0022</td>
    <td>Gold (All parts check, full engine check, cooland fluid exchange, wash and wax)</td>
    <td>1000</td>
  </tr>
  <tr>
    <td>0023</td>
    <td>Platinum (Full car check-up, wash and wax.)</td>
    <td>2000</td>
  </tr>
</table>
</body>
<?php
    include "../views/footer.php";
?>
</html>