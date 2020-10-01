<?php include "connection.php";
    $data = json_decode(file_get_contents("php://input"));
    $response = array();
    $thread = array();
    $website = $data->website;
    $query = mysqli_query($connection, "SELECT * FROM visitor_chat WHERE website='$website'");
    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        $visid = $row['id'];
        
        $a = mysqli_query($connection, "SELECT * FROM engagement WHERE customerid='$visid' AND chat_status IS NOT NULL");
        if (mysqli_affected_rows($connection) > 0) {
            $fetchEngagement = mysqli_fetch_array($a, MYSQLI_ASSOC);
            $chatid = $fetchEngagement['chatid'];
            
            $b = mysqli_query($connection, "SELECT * FROM chat_archive WHERE chatid='$chatid'");
            if (mysqli_affected_rows($connection) > 0) {
                $getHistory = mysqli_fetch_array($b, MYSQLI_ASSOC);
                
                $thread[] = array(
                    "id"        =>  $getHistory['id'],
                    "chatid"    =>  $getHistory['chatid'],
                    "date"      =>  $getHistory['date'],
                    "website"   =>  $getHistory['website'],
                    "thread"    =>  json_decode($getHistory['thread'])
                );
                
                $initiator = $fetchEngagement['superadmin_agentid'];
                
                $useridGetter = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM account WHERE id='$initiator'"), MYSQLI_ASSOC);
                $userid = $useridGetter['userid'];
                
                $profileGetter = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM profile WHERE id='$userid'"), MYSQLI_ASSOC);
                
                $response[] = array(
                    "ip"            =>  $row['IP'],
                    "firstname"     =>  $row['firstname'],
                    "email"         =>  $row['email'],
                    "contact"       =>  $row['contact'],
                    "time_visited"  =>  $row['time_visited'],
                    "chatid"        =>  $fetchEngagement['chatid'],
                    "timeframe"     =>  $fetchEngagement['timeframe'],
                    "chat_status"   =>  $fetchEngagement['chat_status'],
                    "converted"     =>  $fetchEngagement['converted'],
                    "agentfirstname"=>  $profileGetter['firstname'],
                    "agentlastname" =>  $profileGetter['lastname'],
                    "contact"       =>  $profileGetter['contact'],
                    "email"         =>  $profileGetter['email'],
                    "role"          =>  $profileGetter['role'],
                    "chathistory"   =>  $thread
                );
                
                $thread = [];    
            }  
        }
    }
    
    echo json_encode($response);
    die();
?>