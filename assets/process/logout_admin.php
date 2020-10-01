<?php include "connection.php";

    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id;
    
    $query = mysqli_query($connection, "UPDATE account SET ip='0', status='logged off', retries = '0' WHERE retries='$id'");
    if ( mysqli_affected_rows($connection) > 0 ) {
        echo "logout";
        session_destroy();
        die();
    }
    else 
    {
        echo mysqli_error($connection);
        die();
    }

?>