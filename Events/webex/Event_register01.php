<?php
require 'db.php';
require '/home/rtbsehck/public_html/send_mail.php';
date_default_timezone_set("Asia/Kolkata");

session_start();

$_SESSION['msg']=" ";

if(isset($_REQUEST['id']) && isset($_REQUEST['name']) && isset($_REQUEST['eid']) && isset($_REQUEST['branch']) && isset($_REQUEST['phone']))
{  $eid = filter_var($mysql->real_escape_string(trim($_REQUEST['eid'])),FILTER_SANITIZE_STRING);
   
   $naam = filter_var($mysql->real_escape_string(ucfirst($_REQUEST['name'])),FILTER_SANITIZE_STRING);
   
    $branch = filter_var($mysql->real_escape_string($_REQUEST['branch']),FILTER_SANITIZE_STRING);
   
    $email = filter_var($mysql->real_escape_string(trim($_REQUEST['id'])),FILTER_SANITIZE_STRING);
   
    $phone =$mysql->real_escape_string(trim( $_REQUEST['phone']));
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
   {
        if(preg_match('/^[0-9]{10}+$/', $_REQUEST['phone']))
        {
              if(preg_match("/^[a-zA-Z'-]/", $naam))
              
              {
                $res=$mysql->query("select * from pythonevent where EnrollID='$eid' and Email='$email'");

                 if($res->num_rows==0)
                {
                    if($mysql->query("insert into pythonevent VALUES('$eid','$naam','$email','$phone','$branch')"))
                    {
                    $msg="You Are Successfully Registered !!, Please Check Your Email ID for Confirmation..";
                    $mail_msg=nl2br('Dear <b>'.$naam.'-'.$eid.'</b>,
                    
                     Congratulations !!,You are Sucessfully Registered 
                     for the <b>Web Extension Development Workshop Event</b> Conducted by Mozilla Phoenix Club.
        
                    Date  :- 24th March.2018
                    Time  :- 3:00 p.m
                    Venue :- LT-5
        
        
                    Thanks and Regards
                    <img src="cid:logoimg">
                    <p style="color:#eda81e;">Team Mozilla Phoenix JUET</p>
                    &copy;Copyright '.date('Y').'-All Rights Reserved.'
                    );
       sendmail($email,"Web Extension Development !! Confirmation",$mail_msg,"Email Confirmation Send !!");
       $mail_msg2=nl2br('Dear <b>Admin</b>,
                    
                     Congratulations !! '.$naam.' is Sucessfully Registered for the <b>Web Extension Development Workshop Event</b> Conducted by Mozilla Phoenix Club.
                    Details of Registered User :-
                      
                    Branch  :- '.$branch.'
                    Enroll-Id  :- '.$eid.'
                    Email-Id :- '.$email.'
                    Contact :- '.$phone.'
        
                    Thanks and Regards
                    <img src="cid:logoimg">
                    <p style="color:#eda81e;">Team Mozilla Phoenix JUET</p>
                    &copy;Copyright '.date('Y').'-All Rights Reserved.'
                    );
   //    sendmail("vaibhav@mpcjuet.tech","Programming in Python !! Notification",$mail_msg2,"Email Confirmation Send !!");
       sendmail("shubhendra@mpcjuet.tech","Web Extension Development !! Notification",$mail_msg2,"Email Confirmation Send !!");
       sendmail("sushant@mpcjuet.tech","Web Extension Development !! Notification",$mail_msg2,"Email Confirmation Send !!");
    
       echo $msg;
       echo "<script type='text/javascript'>confirm('$msg');</script>";     
                    }
                
      

   }
   else
       {
           $msg="You Are Already Registered !!";
           echo "<script type='text/javascript'>confirm('$msg');</script>";
           ob_start();
      
           echo $msg;
          
           
       }



}else
{
     echo "Please Enter Valid Name , otherwise You will not be Registered !!";
}}
       else
       {
            echo "Please Enter Valid Phone Number , otherwise You will not be Registered !!";
       }
   }
    else
    {
        echo "Please Enter Valid Email address , otherwise You will not be Registered !!";
    }
}
else
{

    echo "Error in Registration !! Please Contact to sushant@mpcjuet.tech (Sushant Singh)";
}

?>