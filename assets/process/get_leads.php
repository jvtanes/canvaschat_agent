<?php include "connection.php";

    $data = json_decode(file_get_contents("php://input"));
    $response = array();
    $adminid = $data->Admin_id;
    $accountQuery = mysqli_query($connection, "SELECT * FROM account WHERE id='$adminid'");
    $accountFetcher = mysqli_fetch_array($accountQuery);
    $profileid = $accountFetcher['userid'];
    $getadminid = mysqli_query($connection, "SELECT * FROM profile WHERE id='$profileid'");
    $adminFetcher = mysqli_fetch_array($getadminid);
    $adminID=$adminFetcher['adminid'];
    $query = mysqli_query($connection, "SELECT * FROM client_property WHERE client_id = '$adminID'");
    if ( mysqli_affected_rows($connection) > 0 ) {
        while($row = mysqli_fetch_array($query)){
        $business_url = $row['business_url'];
        $business_name = $row['business_name'];
        $convo_info = mysqli_query($connection, "SELECT * FROM conversations WHERE website='$business_url' and status ='unpaid' order by dateconverted desc ");
          if ( mysqli_affected_rows($connection) > 0 ) {
           while($convorow = mysqli_fetch_array($convo_info)){
                $chatid = $convorow['chatid'];
                $website = $convorow['website'];
                $agentID = $convorow['agent'];
                $mark = $convorow['mark'];
                $status = ucwords($convorow['status']);
                $visitor = $convorow['visitor'];
                $conversation = $convorow['conversation'];
                $date = $convorow['dateconverted'];
                $lead[] = array("lead" => json_decode($convorow['conversation'])); 
                $selectaccount = mysqli_query($connection, "SELECT * FROM account WHERE id='$agentID'");
                $fetchagent= mysqli_fetch_array($selectaccount);
                $agent_id = $fetchagent['userid'];
                $selectprofile = mysqli_query($connection, "SELECT * FROM profile WHERE id='$agent_id'");
                $fetchprofile= mysqli_fetch_array($selectprofile);
                $firstname = $fetchprofile['firstname'];
                $lastname = $fetchprofile['lastname'];
                $response[] = array( "chat_id" => $chatid,
                                 "visitor" => $visitor,
                                 "agent" => ucfirst($firstname). " " .ucfirst($lastname),
                                 "website" => $website,
                                 "admin_ID" => $adminID,
                                 "status"   => $status,
                                 "date" => $date,
                                 "mark" => $mark,
                                 "thread" => $lead
                                 );
                                $lead  = [];
           }  
     
    } 
    }  
     echo json_encode($response);
    }else {
        echo "No Data Found .";
        die();
    }
?>