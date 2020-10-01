<?php
	header ("Access-Control-Allow-Origin: *");
	header ("Access-Control-Expose-Headers: Content-Length, X-JSON");
	header ("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
	header ("Access-Control-Allow-Headers: *");

    $connection = mysqli_connect("localhost", "jackpine_jackpine_user", "Canvaschat123!@#", "jackpine_jackpine");
?>