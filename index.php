<?php
?>
<html>
	<head>
		<title>Mozilla Phoenix Club JUET</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
		<link href="https://fonts.googleapis.com/css?family=Zilla+Slab" rel="stylesheet">
	</head>
	<body>
			<header id="header">
				<h1 style="color: white;">Moz:lla Phoenix Club JUET</h1>
				<nav>
					<ul>

						<li><a href="./Events/hackathon" target="_blank">Hackathon 2k18</a></li>
						<li><a href="#contact">Our Partners</a></li>
						
					<li><a href="team/team.html">Team</a></li>
					</ul>
				</nav>
			</header>


			<section id="intro" class="main style1 dark fullscreen">
				<div class="content">
					<header>
						<img src="images/logo_white.png" style="width:150px;height:150px;">
						<h2>Moz:lla Phoenix Club JUET</h2>
					</header>
					<h3>A part of the network of <strong>Mozilla Campus Clubs</strong> inspired by the Mozilla Learning Network</h3>
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>


			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2" style="background-color: #3fa7de">
					<header>
						<h2>Who Are We</h2>
					</header>
					<p>We are the group of students with a passion for technology working together to build the open web at <strong>Jaypee University of Engineering and Technology</strong>(Guna, Madhya Pradesh).
					</p>
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>


			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2" style="background-color: #3fa7de">
					<header>
						<h2>What We Do</h2>
					</header>
					<p>We meet regularly to advance Mozilla's mission<strong>("to ensure the Internet is a global public resource, open and accessible to all")</strong> by building and innovating on open source projects that keep the web open.</p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>


			<section id="work" class="main style3 primary">
				<div class="content">
					<header>
						<h2>Past Events</h2>
						<p>MPCJUET aims to show the power of web. MPCJUET is about more than lending a hand. It’s about learning, collaborating and sharing your skills with the community of JUETians — coders, organizers, activists and more — who help shape the Web every day.</br><strong>"Doing Good is part of our Code!"</strong></p>
					</header>


						<div class="gallery">
							<article class="from-left">
								<a href="images/fulls/01.jpg" class="image fit"><img src="images/thumbs/01.jpg" title="Orientation Session 2k17" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="images/fulls/02.jpg" class="image fit"><img src="images/thumbs/02.jpg" title="War for Tresor(online treasure hunt)" alt="" /></a>
							</article>
							<article class="from-left">
								<a href="images/fulls/03.jpg" class="image fit"><img src="images/thumbs/03.jpg" title="Firefox Quantum Sprint" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="images/fulls/04.jpg" class="image fit"><img src="images/thumbs/04.jpg" title="Python Workshop" alt="" /></a>
							</article>
							<article class="from-left">
								<a href="images/fulls/05.jpg" class="image fit"><img src="images/thumbs/05.jpg" title="Hour of Code-Jay Jyoti School" alt="" /></a>
							</article>
							<article class="from-right">
								<a class="image fit"><img src="images/thumbs/06.jpg" title="" alt="" /></a>
							</article>
						</div>

				</div>
			</section>

			<section id="contact" class="main style3 secondary">
				<div class="content">
					<header>
						<h2>Our Partners</h2>
						<marquee behavior="scroll" direction="left">

		<img src="images/partner/JetBrains.png" width="160" height="140" alt="JetBrains" style="padding:0 20px;"/>

		<img src="images/partner/tech.png" width="200" height="150" alt=".tech"  style="padding:0 20px;"/>

		<!--<img src="images/partner/RedBull.png" width="180" height="120" alt="RedBull" style="padding:0 20px;"/> -->

		<img src="images/partner/applop.png" width="200" height="80" alt="applop" style="padding:0px 20px 20px 20px;"/>
  </marquee>
					</header>
					<header>
						<h2>Find Us Here!</h2>
					</header>
					<div id="map" style="width:100%;height:500px">My map</div>
				</div>
			</section>

			<footer id="footer">

					<ul class="actions">
						<li><a href="https://www.facebook.com/juetfirefoxclub" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://github.com/MozPhoenixClubJUET" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="https://withshubh.wordpress.com" class="icon fa-wordpress"><span class="label">Wordpress</span></a></li>
					</ul>

					<ul class="menu">
						<li>&copy; Mozilla Phoenix Club JUET</li>
						<li>Developed By: <a href="https://www.facebook.com/juetfirefoxclub">Mozilla Phoenix Club JUET</a></li>
						<li>Contact Us: <a href="mailto:support@mpcjuet.tech">support@mpcjuet.tech</a></li>
					</ul>

			</footer>


			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script>
      function initMap() {
        var uluru = {lat: 24.4349, lng: 77.1612};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
			  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYe9PsCOQH2IP5x88wnemt2UuUrz0sHb4&callback=initMap"
  type="text/javascript"></script>

</body>
</html>
