<?php
include "connection.php";
$data=json_decode(file_get_contents("php://input"));


$profile= $data->adminprofile;
$id = $data->id; 
mysqli_query($connection, "UPDATE profile SET image = '$profile' WHERE id='$id' ");
	if(mysqli_affected_rows($connection)>0)
	{
		echo"updated";
	}
	else
	{
		echo mysqli_error($connection);
	}
 ?>