<?php 
	
	require "login_connection.php";

	function validate($username, $password) {

		$conn = connect();

		if ($conn) {

			$sql = "SELECT id FROM customer_table WHERE Username = '" . $username . "' and Password = '" . $password . "'";

			$res = mysqli_query($conn, $sql);

			if (mysqli_num_rows($res) === 1) 
				return true;
			return false;
		}
	}

	function get($id) {
		$conn = connect();

		if ($conn) {
			$stmt = $conn->prepare("SELECT  id, Username, Password FROM customer_table WHERE id = ?");
			$stmt->bind_param("i", $uid);

			$uid = $id;
			$stmt->execute();

			/*$stmt->bind_result($i, $u, $p, $e);

			while($stmt->fetch) {
				echo $i . " " . $u;
			}*/
		}
	}

	function getAll() {

		$conn = connect();

		if ($conn) {
			$sql = "SELECT  id, Username, Password FROM customer_table";

			$res = mysqli_query($conn, $sql);

			$users = array();

			if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}

				return $users;
			}
		}

		return array();
	}
?>