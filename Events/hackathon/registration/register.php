<?php
require 'db.php';
require '/home/rtbsehck/public_html/send_mail.php';
date_default_timezone_set("Asia/Kolkata");

if(isset($_REQUEST['mode'])) {
    if ($_REQUEST['mode'] == '404') {
        if (isset($_REQUEST['teamName']) && isset($_REQUEST['emailid']) && isset($_REQUEST['member1']) && isset($_REQUEST['member2']) || isset($_REQUEST['member3']) || isset($_REQUEST['member4'])) {
            $team_name = filter_var($mysql->real_escape_string(ucfirst($_REQUEST['teamName'])), FILTER_SANITIZE_STRING);
            $email = filter_var($mysql->real_escape_string(trim($_REQUEST['emailid'])), FILTER_SANITIZE_EMAIL);
            $member1 = filter_var($mysql->real_escape_string(ucfirst($_REQUEST['member1'])), FILTER_SANITIZE_STRING);
            $member2 = filter_var($mysql->real_escape_string(ucfirst($_REQUEST['member2'])), FILTER_SANITIZE_STRING);
            $member3 = "";
            $member4 = "";
            if (isset($_REQUEST['member3'])) {
                $member3 = filter_var($mysql->real_escape_string(ucfirst($_REQUEST['member3'])), FILTER_SANITIZE_STRING);
            }
            if (isset($_REQUEST['member4'])) {
                $member4 = filter_var($mysql->real_escape_string(ucfirst($_REQUEST['member4'])), FILTER_SANITIZE_STRING);
            }

           if(filter_var($email,FILTER_VALIDATE_EMAIL))
           {
            $res = $mysql->query("select * from ar_vr where team_name='$team_name' and email='$email'");
            if ($res->num_rows == 0) {
                if ($mysql->query("insert into ar_vr (team_name,member1,member2,member3,member4,email) VALUES('$team_name','$member1','$member2','$member3','$member4','$email')")) {
                    $msg = "You Are Successfully Registered !!, Please Check Your Email ID for Confirmation..";
                    $mail_msg = nl2br('Dear <b>' . $team_name . '-</b>,
                    
                     Congratulations !!,Your Team is Sucessfully Registered 
                     for the <b>Web VR/AR Hackathon Event</b> Conducted by Mozilla Phoenix Club.
        
                    Date  :- 15th April.2018
                    Time  :- 9:00 a.m to 3:00 p.m
                    Venue :- CR-20
        
        
                    Thanks and Regards
                    <img src="cid:logoimg">
                    <p style="color:#eda81e;">Team Mozilla Phoenix JUET</p>
                    &copy;Copyright ' . date('Y') . '-All Rights Reserved.'
                    );
                   sendmail($email, "Web VR/AR Hackathon !! Confirmation", $mail_msg, "Email Confirmation Send !!");
                    $mail_msg2 = nl2br('Dear <b>Admin</b>,
                    
                     Congratulations !! ' . $team_name . ' Team is Sucessfully Registered for the <b>Web VR/AR Hackathon Event</b> Conducted by Mozilla Phoenix Club.
                    Details of Registered User :-
                      
                    Team Captain Email-Id :- ' . $email . '
        
                    Thanks and Regards
                    <img src="cid:logoimg">
                    <p style="color:#eda81e;">Team Mozilla Phoenix JUET</p>
                    &copy;Copyright ' . date('Y') . '-All Rights Reserved.'
                    );
                    sendmail("shubhendra@mpcjuet.tech","Web VR/AR Status",$mail_msg2,"");
                    echo $msg;
                }
                else{
                    echo 'Please Check Your Details Correctly !!';
                }

            } else {
                $msg = "Your Team is Already Registered !!";
                echo $msg;
                ob_start();

            }}
            else
            {
                echo 'You have Entered invalid Email Address , Please Check Your Email-id !!';
            }
        }
        else
        {
            echo 'Error 112';
        }
    }
    else{
        echo 'Error 343';
    }
}
else
{
    echo 'Error 123';
}

 ?>