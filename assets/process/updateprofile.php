<?php include "connection.php";

	$data = json_decode(file_get_contents("php://input"));

		$id = mysqli_real_escape_string($connection, $data->id);
		$firstname = mysqli_real_escape_string($connection, $data->firstname);
		$lastname = mysqli_real_escape_string($connection, $data->lastname);
		$contact = mysqli_real_escape_string($connection, $data->contact);

		$sql = mysqli_query($connection, "UPDATE profile SET firstname = '$firstname', lastname = '$lastname', contact = '$contact' WHERE adminid = '$id'");
		 if ( mysqli_affected_rows($connection) > 0 ){
			echo "updated";
		} else {
			echo "Error";
		}
	
?>