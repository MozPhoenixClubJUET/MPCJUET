<?php
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
    <meta name="description" content="Event Conducted By MPC, Juet At Tachyon 2018">
    <title>AR/VR Hackathon</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <style>
        /* centered columns styles */
        .row-centered {
            text-align: center;
        }

        .col-centered {
            display: inline-block;
            float: none;
            /* reset the text-align */
            text-align: left;
            /* inline-block space fix */
            margin-right: -4px;
            text-align: center;
        }

        html,
        body {
            font-family: 'Lato', sans-serif !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Lato', sans-serif !important;
        }

        p {
            font-family: 'Lato', sans-serif !important;
        }

        .typed-cursor {
            opacity: 1;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes blink {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @-moz-keyframes blink {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        .main-header .typed-cursor {
            font-size: 4.25em;
            line-height: 1.2;
        }

        .sub-header .typed-cursor {
            font-size: 1.6em;
            line-height: 1.6;
        }
        .responsive-logos {
            width: 100%;
            max-width: 45px;
            height: auto;
        }
        body {
            color: #6a6c6f;
            background-color: #f1f3f6;
            margin-top: 30px;
        }

        .container {
            max-width: 960px;
        }

        .panel-default > .panel-heading {
            color: #333;
            background-color: #fff;
            border-color: #e4e5e7;
            padding: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .panel-default > .panel-heading a {
            display: block;
            padding: 10px 15px;
        }

        .panel-default > .panel-heading a:after {
            content: "";
            position: relative;
            top: 1px;
            display: inline-block;
            font-family: 'Glyphicons Halflings';
            font-style: normal;
            font-weight: 400;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            float: right;
            transition: transform .25s linear;
            -webkit-transition: -webkit-transform .25s linear;
        }

        .panel-default > .panel-heading a[aria-expanded="true"] {
            background-color: #ffffff;
        }

        .panel-default > .panel-heading a[aria-expanded="true"]:after {
            content: "\2212";
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .panel-default > .panel-heading a[aria-expanded="false"]:after {
            content: "\002b";
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .accordion-option {
            width: 100%;
            float: left;
            clear: both;
            margin: 15px 0;
        }

        .accordion-option .title {
            font-size: 20px;
            font-weight: bold;
            float: left;
            padding: 0;
            margin: 0;
        }

        .accordion-option .toggle-accordion {
            float: right;
            font-size: 16px;
            color: #6a6c6f;
        }

        .accordion-option .toggle-accordion:before {
            content: "Expand All";
        }

        .accordion-option .toggle-accordion.active:before {
            content: "Collapse All";
        }

        .panel-body {
            padding: 6px;
        }

        .hov:hover {
            cursor: pointer;
            color: black;
        }


    </style>
    <script src="../../use.fontawesome.com/4602af5a7f.js"></script>
</head>

<body>
    
 <div class="container">
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">AR-VR Event Registration</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
           <div class="row" id="register_content">
               
<div class="container">
    <div class="row">
        <div align="center" class="col-md-12" style="margin-top: 5% !important;">
            <p style="text-align: center; color: darkblue; font-size: 12px; font-family: 'Arial Black';">
                Please Fill the Form Details Correctly !!
            </p>
            <div class="row" style="margin-top: 3% !important;">
                <div class="col-md-12">
                    <input type="text" id="input1" class="form-control" style="width: auto !important;" placeholder="Enter Your Team Name">
                    <select onchange="get_team()" id="input2" class="form-control" style="margin-top: 2%; width: auto;">
                        <option disabled selected="true">Select Your Team Size</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <div id="team_members" ></div>
                    <input type="email" id="input_email" class="form-control" style="margin-top: 2%; width: auto;" placeholder="Team Captain Email-id" required>
                    <input type="submit" class="btn btn-danger submit_form" onclick="register()" style="margin-top: 2%; width: auto;" value="Submit" disabled />
                    <script>


                    function get_team() {
                        if($("#input2").val())
                        {    var number = parseInt($("#input2").val());
                            $("#team_members").empty();
                            for (i=1;i<=number;i++){
                                var input = document.createElement("input");
                                input.type = "text";
                                input.className = "form-control";
                                input.style.marginTop = '2%';
                                input.style.width = "auto";
                                input.placeholder = "Member "+i+"Name";
                                input.id = "tm_"+i;
                                team_members.appendChild(input);

                            }
                        }

                    }
                   function register() {

                       var team_name = $("#input1").val();
                       var email = $("#input_email").val();
                       var members = {'tm_1':$("#tm_1").val(),
                                       'tm_2':$("#tm_2").val(),
                                        'tm_3':$("#tm_3").val(),
                                         'tm_4':$("#tm_4").val()
                                       };

                        $.ajax({
                            url:'registration/register.php',
                            method:'post',
                            data:{'mode':'404','teamName':team_name,'emailid':email,'member1':members.tm_1,'member2':members.tm_2,'member3':members.tm_3,'member4':members.tm_4},
                            dataType:'html',
                            success:function (response) {
                                  alert(response);
                            }

                        });

                   }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
               
             </div>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

    </div>    
    
<section class="menu cid-qHauBwKoqI" once="menu" id="menu2-2">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-toggleable-sm bg-color navbar-fixed-top">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <div class="hamburger text-white">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
          <span class="navbar-logo">
            <a href="https://mpcjuet.tech/">
              <img src="assets/images/logo2.png" height="60px">
            </a>
          </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="#home" style="text-decoration: none;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black link display-4" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black link display-4" href="#timeline">Timeline</a>
                </li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="#mentors">
                    Mentor</a>
                </li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="#Prizes">
                    Prizes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black link display-4" href="#sponsors">Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black  display-4" href="#footer1-a">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</section>

<section class="engine">
</section>
<section class="cid-qHatObpT5W mbr-fullscreen mbr-parallax-background" id="home">
    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10 col-xs-12">
                <div id="main-header">
                    <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1 main-header" align="left">AR/VR<br>Hackathon</h1>
                </div>
                <div class="main-header">
                    <span id="main-typed" class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1" style="white-space:pre;"></span>
                </div>
                <br>
                <div id="sub-header">
                    <p class="mbr-text pb-3 mbr-fonts-style display-5 sub-header">Be there on <br>15<sup>th</sup> April 2018</p>
                </div>
                <div class="sub-header">
                    <span id="sub-typed" class="mbr-text pb-3 mbr-fonts-style display-5 sub-header" style="white-space:pre;"></span>
                </div>
                <p class="mbr-text pb-3 mbr-fonts-style display-5"></p>
                <!-- <br> -->
                <div class="mbr-section-btn" id="register-btn"><a class="btn btn-md btn-secondary display-4" href="#register_content" data-toggle="modal" data-target="#myModal">REGISTER NOW</a></div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-arrow-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="clients cid-qHayDsquKQ" id="about" style="background: #ecf0f1;">
    <div class="container mb-5">
        <div class="media-container-row">
            <div class="col-12">
                <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2" align="center">
                    ABOUT
                </h2>
                <p class="" align="justify">
                    AR/VR Hackathon is an event that will see participants going on a journey that started as a small
                    budding idea and will end as a Minimum Viable Product that is good enough to turn heads. It is going
                    to take place on <b><u>15th April 2018</u></b>. The theme for the Hackathon is <b>Augmented Reality</b> and <b>Virtual
                    Reality</b>. They must come together in <b><u>Teams Of Two, three or maximum four</u></b> and build a real world
                    problem solving project whether it be based virtual reality or Augmented Reality depending upon the
                    participants.
                </p>
                <p class="" align="justify">
                    Participants can work on any of the following Tracks:
                <ul>
                <li align="justify"><b>AR/VR Track</b> - Drawn towards the flashes of building unparalleled virtual and
                    augmented reality experiences? Unveil your talents using this track.
                    </li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</section>


<section class="timeline2 cid-qHayhr0vbV" id="timeline" style="background: #ffffff;">
    <div class="container align-center">
        <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2">
            TIMELINE
        </h2>
        <h3 class="mbr-section-subtitle pb-5 mbr-fonts-style display-5">
            Here's what you'll get
        </h3>
        <div class="container timelines-container" mbri-timelines="">
            <div class="row timeline-element reverse separline">
          <span class="iconsBackground">
                    <span class="mbri-home mbr-iconfont"></span>
          </span>
                <div class="col-xs-12 col-md-6 align-left">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">
                            9.00 AM - Doors Open
                        </h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            Gates will be open for the Hackathon.
                        </p>
                    </div>
                </div>
            </div>


            <div class="row timeline-element  separline">
          <span class="iconsBackground">
                    <span class="mbri-update mbr-iconfont"></span>
          </span>
                <div class="col-xs-12 col-md-6 align-right">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">
                            Inbetween
                        </h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            11:30 AM - We will be providing refreshment
                        </p>
                    </div>
                </div>
            </div>


            <div class="row timeline-element reverse separline">
          <span class="iconsBackground">
                    <span class="mbri-code mbr-iconfont"></span>
          </span>
                <div class="col-xs-12 col-md-6 align-left">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">
                            2:30 PM - Hackathon Ends
                        </h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">Time's Up!
                        </p>
                    </div>
                </div>
            </div>

            <div class="row timeline-element sparline">
          <span class="iconsBackground">
                    <span class="mbri-gift mbr-iconfont"></span>
          </span>
                <div class="col-xs-12 col-md-6 align-left">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">
                            03:00 PM - Declaration of Result
                        </h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">Result will be declared. Winners will be
                            awarded at Prize Distribution Ceremony at 6:00 PM on 15th April, 2018.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<center>
    <section class="features16 cid-qHavQRPbyU container-fluid" id="mentors" style="padding-bottom: 1%;">
        <div class=" align-center container-fluid" id="mentors" style="padding: 7%;">
            <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2">
                MENTOR
            </h2>
            <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-5">
                You are not alone in your endeavour, you'll be guided by the very best in the business
            </h3>
            <div class="row media-row">
                <div class="team-item col-xl-3 col-md-2 align-left">
                </div>
                <div class="team-item col-xl-5 col-md-9 align-left">
                    <div class="item-image">
                        <img style="border-radius:250px !important;" src="assets/images/shivank.jpg" class="img-fluid" width="200">
                    </div>
                    <div class="item-caption py-3">
                        <div class="item-name px-2">
                            <div class="item-social align-right" style="float:right;">

                            </div>
                            <p class="mbr-fonts-style display-5 align-left men5 hov">
                                Mr. Shivang Shekhar
                            </p>
                            <p class="mbr-fonts-style display-6 align-left men5 hov"><a
                                    href="https://www.facebook.com/pages/Google-Summer-of-Code/108765615824966"
                                    target="_blank" >Google Summer of Code</a><img
                                    class="img-responsive responsive-logos img-thumbnail" src="assets/images/gsoc.png"/><br>
                                Mentor <br> February 13, 2018 to Present<br>
                                Mentoring Summer of Code 2018 projects for Sugar Labs</p>
                        </div>
                        <div class="item-role px-1">
                            <p id="men5p"  align="center">

                            <p><a href="https://www.facebook.com/truegameio-2400198623538095/"
                                  target="_blank" >truegame.io</a><img
                                    class="img-responsive responsive-logos img-thumbnail"
                                    src="assets/images/truegame.jpg"/><br>Block chain Developer <br> February 9, 2018 to
                                present<br>
                                Working as a Block chain/ Smart Contracts Developer for a completely functional iGaming
                                project.
                            </p>
                            <p><a href="https://www.facebook.com/vrarassociation/"
                                  target="_blank" >VR/AR Association</a><img
                                    class="img-responsive responsive-logos img-thumbnail" src="assets/images/arvr.jpg"/>
                                <br>Block chain Developer <br> February 9, 2018 to present<br>
                                Working as a Block chain/ Smart Contracts Developer for a completely functional iGaming
                                project.
                            </p>
                            <p><a href="https://www.facebook.com/pages/Google-Code-in/1558117321084865"
                                  target="_blank" >Google Code-in</a><img
                                    class="img-responsive responsive-logos img-thumbnail"
                                    src="assets/images/codein.png"/><br>Mentor <br> November 14, 2017 to January 31,
                                2018
                                Mentor for Google Code-In 2017 at Sugar Labs
                            </p>

                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="team-item col-xl-3 col-md-2">
                </div>
            </div>
        </div>
    </section>
</center>

<section style="background-color:white !important;" id="Prizes">
    <div class="container align-center">
     <div class="row">
        <div class="col-md-12">
            <h1 style="margin-top:5%;font-family:'Rubik', sans-serif !important; color:#6a6c6f !important;">Prizes</h1><hr>
        </div>
     </div>
     <div class="row">
         <div class="col-md-6" style="margin-top:3% !important;">
             <img class="img-fluid img-responsive" src="assets/images/1image.jpg" width="600">
         </div>
          <div class="col-md-6" style="margin-top:3% !important;">
             <img class="img-fluid img-responsive" src="assets/images/2image.jpg" width="600">
         </div></div>
         <div class="row" style="margin-top:3% !important;">
          <div class="col-md-6">
             <img class="img-fluid img-responsive" src="assets/images/3image.jpg" width="600">
         </div>
          <div class="col-md-6">
             <img class="img-fluid img-responsive" src="assets/images/4image.jpg" width="600">
         </div></div>
     </div>
    
</section>

<section class="clients cid-qHayDsquKQ" id="sponsors" style="background-color: #ecf0f1; color: #ffffff;">
    <div class="container mb-5">
        <div class="media-container-row">
            <div class="col-12 align-center">
                <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2" style="color: #767676;">
                    PARTNERS
                </h2>
                <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-5" align="justify">
                    Tachyon is organised by Mozilla Phoenix Club . We can't put up a great show without our Partners.
                    Here is your chance to
                    meet the Developers, Designers and Technocrats of tomorrow.
                </h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- <div class="row"> -->
            <div class="col-md-4" style="margin-bottom:20px;margin-top: 20px">
                <div class="item-image w-100  hidden-md-up" style="padding-top: 30%;padding-bottom: 0%">
                    <a href="#" target="_blank">
                        <img src="assets/images/s1.jpg" style="background-color: #ecf0f1; border: transparent; margin-top: 35px;"
                             class="img-responsive clients-img img-thumbnail ">
                    </a>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:20px;margin-top: 20px;">
                <div class="item-image w-100 text-center" style="padding-top: 30%;padding-bottom: 0%">
                    <a href="#" target="_blank">
                        <img src="assets/images/s2.png" style="background-color: #ecf0f1;border: transparent; "
                             class="img-responsive clients-img img-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:20px;margin-top: 20px;">
                <div class="item-image w-100" style="padding-top: 30%;padding-bottom: 0%">
                    <a href="#" target="_blank">
                        <img src="assets/images/s3.png" style="background-color: #ecf0f1;border: transparent;"
                             class="img-responsive clients-img img-thumbnail">
                    </a>
                </div>
            </div>

            <!-- </div> -->
            <!-- <div class="row"> -->
            <div class="col-md-4 " style="margin-bottom:20px;margin-top: 20px;">
                <div class="item-image w-100">
                    <a href="#" target="_blank">
                        <img src="assets/images/s4.png" style="background-color: #ecf0f1;border: transparent; margin-top: 35px;"
                             class="img-responsive clients-img img-thumbnail">

                    </a>
                </div>
            </div>
            <div class="col-md-4 " style="margin-bottom:20px;margin-top: 20px;">
                <div class="item-image w-100" style="padding-top: 10%;padding-bottom: 0%">
                    <a href="#" target="_blank">
                        <img src="assets/images/s5.png" style="background-color: #ecf0f1;border: transparent;"
                             class="img-responsive clients-img img-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-md-4 " style="margin-bottom:20px;margin-top: 20px;">
                <div class="item-image w-100" style="padding-top: 20%;padding-bottom: 0%">
                    <a href="#" target="_blank">
                        <img src="assets/images/s6.png" style="background-color: #ecf0f1;border: transparent; margin-top: -10px;"
                             class="img-responsive clients-img img-thumbnail">

                    </a>
                </div>
            </div>
            <div class="col-md-4 "></div>
           
            <div class="col-md-4 "></div>
            <!-- </div> -->
        </div>
    </div>
    </div>
</section>

<section class="cid-qHayXmmo0r" id="footer1-a" style="background-color: #424242;">
    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-4">
                <div class="media-wrap">
                    <a href="https://mpcjuet.tech/">
                        <img src="assets/images/mpclogo.png" class="img-fluid" style="height:100px !important; width:200px !important;">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Address
                </h5>
                <p class="mbr-text">
                    Jaypee University Of Engineering And Technology
                    <br>Raghogarh,
                    <br>Guna.
                </p>
            </div>
            <div class="col-12 col-md-4 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                   <a href="mailto:support@mpcjuet.tech"> Email: support@mpcjuet.tech</a><br>
                     <a href="mailto:admin@mpcjuet.tech"> Email: admin@mpcjuet.tech</a>
                </p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright MPCJUET 2018 - JUET, GUNA
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">

                        <div class="soc-item">
                            <a href="https://www.facebook.com/JuetFirefoxClub/" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript" src="assets/jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/parallax/jarallax.min.js"></script>
<script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
<script src="assets/mbr-clients-slider/mbr-clients-slider.js"></script>
<script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/theme/js/script.js"></script>
<script src="assets/typed/typed.min.js"></script>
<script>
    var typed = new Typed('#main-typed', {
        stringsElement: '#main-header',
        typeSpeed: 90,
        startDelay: 10,
        loop: false
    });
    var typed = new Typed('#sub-typed', {
        stringsElement: '#sub-header',
        typeSpeed: 50,
        startDelay: 2000,
        loop: false
    });
</script>
<script src="assets/js/faq.js"></script>
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "520145961374684", // Facebook page ID
            company_logo_url: "clublogo.png", // URL of company logo (png, jpg, gif)
            greeting_message: "Hello, how may we help you? Just send us a message now to get assistance.", // Text of greeting message
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol,
            host = "whatshelp.io",
            url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
</body>


</html>

