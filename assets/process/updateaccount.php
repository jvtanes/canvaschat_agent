<?php include "connection.php";

	$data = json_decode(file_get_contents("php://input"));

		$id = mysqli_real_escape_string($connection, $data->id);
		$username = mysqli_real_escape_string($connection, $data->username);
		$password = mysqli_real_escape_string($connection, $data->password);

		$sql = mysqli_query($connection, "UPDATE account SET username = '$username', password = '$password' WHERE id = '$id'");
		 if ( mysqli_affected_rows($connection) > 0 ){
			echo "updated";
		} else {
			echo "Error";
		}
	
?>