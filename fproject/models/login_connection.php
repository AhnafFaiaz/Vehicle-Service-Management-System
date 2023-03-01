<?php 
		//function connect () {
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "customers";

		$conn = mysqli_connect($hostname, $username, $password, $dbname);

		if (!$conn) {

    echo "Connection failed!";

}
		//mysql_select_db($dbname);

		/*if(isset($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "SELECT Username, Password FROM customer_table WHERE Username = '" . $username . "' and Password = '" . $password . "'";
		$res = mysqli_query($conn, $sql);

	}*/

	//}