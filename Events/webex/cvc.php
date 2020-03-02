<?php
require 'db.php';
require '/home/rtbsehck/public_html/send_mail.php';

$res = $mysql->query("select Email from pythonevent where Email IS NOT NULL");
//$num = $res->num_rows();
//$data = $res->fetch_array();

$data_array = array(); 
while($rows = $res->fetch_assoc())
{ $data_array[] = $rows; }

 $msg=nl2br('Dear <b>'.'Registered-Student'.'-'.'</b>,
                  Thanks for doing the Registration for the
                  Web Extension Development Workshop, held on 
                  24th.March.2018 at LT-5 , JUET Guna.
                  Event Time :- 03:00 p.m to 6:00 p.m
                  
                  Here is the Network login Credentials for accessing
                  the Online Mozilla Phoenix Club Attendance Portal.
                  
                  Network Name :- Mozilla@WeBex
                  Password :- 12345678
                  
                  After Connecting To The Network an IP Address Link Will be
                  Provided to You Where You have to Enter Your Name with
                  Email Address and Enrollment Number.
                  OR
                  You Can do the same via Scanning QR-Code through Your 
                  Mobile Phone , QR-Code Will be Displayed on Projector
                  Screen after the ending up the Event.
                  
                  If You have Faced any issue regarding the Event,
                  Contact us anytime during the event , We Will 
                  Definitely help you out there.
                  
                  We hope to see you there !! Good Luck !!... :)
                  
                  Thanks and Regards
                  Contact email :- support@mpcjuet.tech
                  <img src="cid:logoimg">
                  <p style="color:#eda81e;">Team Mozilla Phoenix JUET</p>
                  &copy;Copyright '.date('Y').'-All Rights Reserved.'
                    );
    sendmail("shubhendra@mpcjuet.tech","Important Message Regarding Mozilla Phoenix Club Portal Details !!",$msg,"");
    sendmail("admin@mpcjuet.tech","Important Message Regarding Mozilla Phoenix Club Portal Details !!",$msg,"");
foreach($data_array as $value)
{   
    echo $value['Email'];
    echo '<br>';
    sendmail($value['Email'],"Important Message Regarding Mozilla Phoenix Club Portal Details !!",$msg,"");
}


?>