<?php include "connection.php";

    $data = json_decode(file_get_contents("php://input"));
    $response = array();
    $mysession = mysqli_real_escape_string($connection, $data->mysession);
    
    
    $accountQuery = mysqli_query($connection, "SELECT * FROM account WHERE retries='$mysession'");
    $accountFetcher = mysqli_fetch_array($accountQuery);
    $id =  $accountFetcher['id'];
    $profileid = $accountFetcher['userid'];
    $username = $accountFetcher['username'];
    $password = $accountFetcher['password'];
    $nameGetter = mysqli_query($connection, "SELECT * FROM profile WHERE id='$profileid'");
    $nameFetcher = mysqli_fetch_array($nameGetter);
    
    $selectassignment = mysqli_query($connection, "SELECT * FROM agentAssignment WHERE agentid='$profileid'");
     if ( mysqli_affected_rows($connection) > 0 ) {
    while($siteFetcher = mysqli_fetch_array($selectassignment)){
    $site_id = $siteFetcher['website'];

    $query = mysqli_query($connection, "SELECT * FROM client_property WHERE id = '$site_id'");
        $row = mysqli_fetch_array($query);
        $clientid = $row['client_id'];
        $business_url = $row['business_url'];
        $business_name = $row['business_name'];
       
            $response[] = array("urlid"         =>  $userid,
                                "adminID"       =>  $adminid,
                                "cname"         =>  $cname,
                                "profileid"     => $profileid,
                                "username"      =>  $username,
                                "image"         => $nameFetcher['image'],
                                "password"      =>  $password,
                                "firstname"     =>  ucwords($nameFetcher['firstname']),
                                "lastname"      =>  ucwords($nameFetcher['lastname']),
                                "email"         =>  $nameFetcher['email'],
                                "contact"       =>  $nameFetcher['contact'],
                                "role"          =>  ucwords($nameFetcher['role']),
                                "business_url"  =>  $business_url,
                                "business_name" =>  $business_name,
                                "id"            =>  $id
            
            );
            
            echo json_encode($response);
            
       
    } }else {
        echo "No Data Found .";
        die();
    }
?>