<?php include "connection.php";

    $data = json_decode(file_get_contents("php://input"));
    $response = array();
    $adminid = $data->my_id;
    $selectaccount = mysqli_query($connection, "SELECT * FROM account WHERE id='$adminid' ");
        if ( mysqli_affected_rows($connection) > 0 ) {
            $row = mysqli_fetch_array($selectaccount);
            $userid =$row['userid'];
            $selectprofile = mysqli_query($connection, "SELECT * FROM profile WHERE id='$userid' ");
            $prow = mysqli_fetch_array($selectprofile);
            $my_id = $prow['adminid'];
            $selectproperty = mysqli_query($connection, "SELECT * FROM client_property WHERE client_id='$my_id' ");
            if ( mysqli_affected_rows($connection) > 0 ) {
                while($proprow = mysqli_fetch_array($selectproperty)){
                    $website = $proprow['business_url'];
                    
                     $query = mysqli_query($connection, "SELECT * FROM visitor_chat WHERE website='$website'");
                        while ($arow = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                            $visid = $arow['id'];
                            
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
                                        "ip"            =>  $arow['IP'],
                                        "firstname"     =>  $arow['firstname'],
                                        "email"         =>  $arow['email'],
                                        "contact"       =>  $arow['contact'],
                                        "time_visited"  =>  $arow['time_visited'],
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
                 
            }
            
          
        }else {
            echo mysqli_error($connection);
            die();
        }
        }else {
            echo mysqli_error($connection);
            die();
        }
    

?>

