<?php
date_default_timezone_set("Asia/Kolkata");
?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="style.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <script src="jquery/jquery-3.3.1.min.js"></script>
  <title>Web Extension Development Workshop Event</title>
    <link rel="shortcut icon" href="favicon-32x32.png" />
    <style>
        @media screen and (min-width: 1100px) {
            .front_text {
                visibility: hidden;
            
            }}
            
       @media screen and (max-width: 1100px) {
            .lower_text {
                display:none;
                
            }
        }
    
    .active_image
    {
                background-image:url('web4.jpg');
        
    }
    .notactive_image
    {
        background-image:url('web2.jpg');
    }
    </style>
  <script type="text/javascript">
       
       $(window).on('resize', function() {
    if($(window).width() < 1100) {
        $('.image_body').addClass('active_image');
        $('.image_body').removeClass('notactive_image');
    }else{
        $('.image_body').addClass('notactive_image');
        $('.image_body').removeClass('active_image');
    }
   });
     $(window).on('load', function() {
   
    
    if($(window).width() < 1100) {
        $('.image_body').addClass('active_image');
        $('.image_body').removeClass('notactive_image');
    }else{
        $('.image_body').addClass('notactive_image');
        $('.image_body').removeClass('active_image');
    }
   });
               
        function register_pg() {

            document.getElementById("register_content").innerHTML='<div class="col-md-6 col-9">'
                +'<form class="">'+
                '<div class="form-group"> <label>Email address</label>'+
                '<input id="email" type="email" name="Email" class="form-control" placeholder="Enter email" onkeyup="check_fields()"> </div>'+
                '<div class="form-group"> <label>Enrollment Number</label>'+
                '<input type="text" id="eid" name="eid" class="form-control" placeholder="Enroll id" onkeyup="check_fields()"> </div>'+
                '<div class="form-group"> <label>Name</label>'+
                '<input type="text" id="naam" name="naam" class="form-control" placeholder="Your Name.." onkeyup="check_fields()"> </div>'+
                '<div class="form-group"> <label>Branch</label>'+
                '<select id="branch" name="branch" class="form-control"><option value="cse">CSE</option><option value="ece">ECE</option><option value="civil">Civil</option><option value="mech">Mechanical</option><option value="Chem">Chemical</option><option value="other">Others</option></select></div>'+
                '<div class="form-group"> <label>Contact No.</label>'+
                '<input type="number" id="contact" name="contact" class="form-control" placeholder="+91" onkeyup="check_fields()"> </div>'+
                '</form>'+
                '<button id="event_but" type="submit" onclick="event_register()" class="btn btn-secondary" disabled>Submit Details !!</button>'+
                ' <br/><span class="loader" style="display:none;"><img src="loader.gif" width="80" ></span><p class="lead mb-5 text-center" id="response_msg" style="color: red;"></p>'+
                '</div>'+
                '<div class="col-md-6 col-12">'+

                '<img class="img-fluid d-block" src="web2.jpg">'+
                '<p class="" style="color:black; font-size:12px;" >&nbsp;© Copyright 2018 Mozilla Phoenix JUET- All Rights Reserved.</p>'+
                '</div>'+
                '</div>';

        }
        function check_fields()
      {
          if((document.getElementById('email').value.length > 0) && (document.getElementById('eid').value.length > 0) && (document.getElementById('naam').value.length > 0)&& (document.getElementById('branch').value.length > 0)&&(document.getElementById('contact').value.length > 0))
                      {
                          document.getElementById('event_but').disabled = false;
                      }
                      else {
            document.getElementById('event_but').disabled = true;
        }
      }
        function event_register()
        {
            var xhttp = new XMLHttpRequest();
            var id = document.getElementById("email").value;
            var naam = document.getElementById("naam").value;
            var enroll = document.getElementById("eid").value;
            var branch  = document.getElementById("branch").value;
            var contact = document.getElementById("contact").value

            $.ajax({
               url :  'Event_register01.php',
               method : 'post',
               data : {'id':id,'name':naam,'eid':enroll,'branch':branch,'phone':contact},
               dataType : 'html',
               beforeSend: function(){$("#response_msg").html("Please Wait...for the Confirmation");
                   $(".loader").css("display","block");
               },
               success : function(response)
                         {
                             $("#response_msg").html(response);
                             $(".loader").css("display","none");
                         }
            });
            /*xhttp.onreadystatechange = function () {
              if(this.readyState=="4" && this.status=="200")
              {
                  document.getElementById("response_msg").innerHTML=this.responseText;
                 // xhttp.abort();
              }
              else{
                  document.getElementById("response_msg").innerHTML = "Please Wait...for the Confirmation";
              }

            };

           xhttp.open("POST","Event_register01.php",true);

              xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

              xhttp.send("id="+id+"&name="+naam+"&eid="+enroll+"&branch="+branch+"&phone="+contact);*/


        }
    </script>

  </head>

<body style="overflow-x : none;">
  <nav class="sticky-top navbar navbar-expand-md navbar-dark" style="background:#0f3d6a !important;">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Workshop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Web Extension Development</a>
          </li>
        </ul>
        <a id="reg0" class="ml-3 btn navbar-btn btn-danger" href="#register_content" onclick="register_pg()" data-toggle="modal" data-target="#myModal">Register now</a>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center image_body" style="margin:0 auto !important; height:100%; width:100%;">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12 text-white front_text">
          <h1 class="mb-4 display-4"><strong>Web Extension Development Workshop</strong></h1>
          <p class="lead mb-5 text-center text-light">Conducted by Mozilla Phoenix JUET
            <br>
            <br><b class="text-light">Event Details</b>
            <br>
            <br><b>Time :- 3:00 p.m
            <br>Venue :- LT-5
            <br>Date :-  24th. March. 2018</b>
            <br>
            <br>
          </p>

        </div>
      </div>

    </div>
  </div>

    <div class="container">
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Registration Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
           <div class="row" id="register_content"> </div>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

    </div>

  <div class="py-5 text-white" style="background:#1f1a29 !important; padding-bottom: 10px !important;height:auto;">
    <div class="container">
         <div class="row">
          <div class="col-md-12" align="center" style="padding-top:30px;">
              <a href="mailto:support@mpcjuet.tech" class="btn text-light" style="background: #0f3d6a !important;">Contact us</a>
          <a id="reg1" class="btn btn-danger text-right text-light"  onclick="register_pg()" href="#register_content" data-toggle="modal" data-target="#myModal">Register Here !!</a>
          </div>
      </div>
     
       <div class="row">
        <div class="col-12 lower_text" align="center">
        
          <p class="lead mb-5 text-light" style="font-size:12px !important;text-align:justify; font-family: 'Open Sans', sans-serif; !important;">
            <br>
            <br><h2 style="text-decoration:underline; font-family: 'Open Sans', sans-serif; !important;"><b class="text-light">Event Details</b></h2>
            <br><div style=" font-family: 'Open Sans', sans-serif; !important;"><b>Time :- 3:00 p.m
            <br><br>Venue :- LT-5
            <br><br>Date :-  24th. March. 2018</b></div>
            
            <br>
            <br>
          </p>

        </div>
        </div>
      
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2018 Mozilla Phoenix JUET- All rights reserved

            <br> <span style="font-size:12px;">Developed By SushantSoftwares Pvt. Ltd.</span></p>
        </div>
      </div></div>
    </div>
  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</body>

</html>
