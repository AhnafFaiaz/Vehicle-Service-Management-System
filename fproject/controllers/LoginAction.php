<?php 

session_start(); 

require "../models/login_connection.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $username = validate($_POST['username']);

    $password = validate($_POST['password']);

   if (empty($username) or empty($password)) {
			/*echo "Please fill up the form properly";*/
			$_SESSION['msg'] = "Please fill up the form properly";
				header("Location:../views/login.php");
		}
		else{

        $sql = "SELECT * FROM customer_table WHERE Username='$username' AND Password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Username'] === $username && $row['Password'] === $password) {

                //echo "Logged in!";

                //$_SESSION['username'] = $row['Username'];

                //$_SESSION['name'] = $row['name'];

                //$_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $username;

                header("Location: ../views/home.php");

                exit();
            }
            else{

                header("../views/login.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("../views/login.php?error=Incorect User name or password");

            exit();

        }

    }

}
else{

    header("../views/login.php");

    exit();

}
?>












    
