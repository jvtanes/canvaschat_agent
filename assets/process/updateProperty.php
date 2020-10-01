<?php include "connection.php";

	$data = json_decode(file_get_contents("php://input"));
	if (count($data) > 0) {
		$id = mysqli_real_escape_string($connection, $data->id);
		$name = mysqli_real_escape_string($connection, $data->name);
		$url = mysqli_real_escape_string($connection, $data->url);

		$sql = "UPDATE client_property SET business_name = '$name', business_url = '$url' WHERE url_id = '$id'";
		if (mysqli_query($connection, $sql)) {
			echo 1;
		} else {
			echo "Error";
		}
	}
?>

