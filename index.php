<?php
if($_POST["submit"]) {
    $recipient="marc.oesterle1@gmail.com";
    $subject=$_POST["subject"];
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["mailmessage"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody);

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>My Resume</title>
<link rel="icon" href="images/icon.png">
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic CV Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body> 
<!-- banner -->
<div id="home" class="banner">
	<div class="banner-agileinfo">
		<!-- header -->
		<div class="header">
			<div class="container">		
				<div class="logo">
					<h1><a href="index.php">My Resume</a></h1>
				</div> 
				<div class="menu">
					<a href="" id="menuToggle"> <span class="navClosed"></span> </a>
					<nav>  
						<a href="index.php" class="active">Home</a> 
						<a href="#about" class="scroll">About Me</a>  
						<a href="#skills" class="scroll">My Skills</a>  
						<a href="#languages" class="scroll">My Languages</a>
						<a href="#interests" class="scroll">Interests</a>
						<a href="#experience" class="scroll">Experience</a> 
						<a href="#education" class="scroll">My Education</a> 
						<a href="#profile" class="scroll">My Story</a> 
						<a href="#contact" class="scroll">Contact Me</a> 
					</nav>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //header -->
		<div class="banner-main">
			<div class="container">	
				<div class="col-md-5 banner-left">
					<img src="images/Myself.png" alt=""> 
				</div>
				<div class="col-md-7 banner-text">
					<p>Welcome</p>
					<h2><span>I am Marc Oesterlé</span> Business oriented engineer</h2>
					<div class="w3agile_hire_right">
						<a href="#contact" class="wthree-more w3more1 nina scroll" data-text="contact me"> 
							<span>c</span><span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span> <span>m</span><span>e</span>
						</a> 
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>
<!-- //banner -->
<!-- about -->
<div class="about" id="about">
	<div class="container">
		<h3 class="w3l-title">Myself</h3>
		<div class="about-w3l-agileifo-grid">
			<div class="col-md-7 agile-w3l-ab">
				<ul class="rslides" id="slider">
					<li>
						<div class="agile-w3l-ab-img">
							<img src="images/IMG_1.jpg" class="img-responsive" alt="Homey Designs">
						</div>
					</li>
					<li>
						<div class="agile-w3l-ab-img">
							<img src="images/IMG_2.jpg" class="img-responsive" alt="Homey Designs">
						</div>
					</li>
					<li>
						<div class="agile-w3l-ab-img">
							<img src="images/IMG_3.jpg" class="img-responsive" alt="Homey Designs">
						</div>
					</li>
				</ul>
			</div>
			<div class="col-md-5 w3ls-agile-left">
				<div class="w3ls-agile-left-info">
					<h4>Name</h4>
					<p>Marc Oesterlé</p>
				</div>
				<div class="w3ls-agile-left-info">
					<h4>Date of Birth</h4>
					<p>3rd of April 1990</p>
				</div>
				<div class="w3ls-agile-left-info">
					<h4>Address</h4>
					<p> 5 av. du Général Schneider, 67470 SELTZ, FRANCE</p>
				</div>
				<div class="w3ls-agile-left-info">
					<h4>Phone Number</h4>
					<p>+33 6 38 69 97 10</p>
				</div>
				<div class="w3ls-agile-left-info">
					<h4>Email Address</h4>
					<p><a href="marc.oesterle1@gmail.com">marc.oesterle1@gmail.com</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //about -->
<!-- stats -->
<div class="stats wthree-sub" id="skills">
	<div class="container"> 
		<h3 class="w3l-title">My Skills</h3>
		<div class="col-sm-6 stats_grid_right">
			<div class="skillbar" data-percent="95">
			  <span class="skillbar-title" style="background: #f88c5e;">LabVIEW</span>
			  <p class="skillbar-bar" style="background: #f88c5e;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="85">
			  <span class="skillbar-title" style="background: #3498db;">Leadership</span>
			  <p class="skillbar-bar" style="background: #3498db;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="85">
			  <span class="skillbar-title" style="background: #b2ec2f;">Test Automation</span>
			  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar --> 
			
			<div class="skillbar" data-percent="65">
			  <span class="skillbar-title" style="background: #ff33cc;">Risk Management</span>
			  <p class="skillbar-bar" style="background: #ff33cc;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar --> 
			<div class="skillbar" data-percent="80">
			  <span class="skillbar-title" style="background: #f88c5e;">Agile</span>
			  <p class="skillbar-bar" style="background: #f88c5e;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="75">
			  <span class="skillbar-title" style="background: #3498db;">DevOps</span>
			  <p class="skillbar-bar" style="background: #3498db;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="80">
			  <span class="skillbar-title" style="background: #b2ec2f;">Systems Engineering</span>
			  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar --> 
			
			<div class="skillbar" data-percent="65">
			  <span class="skillbar-title" style="background: #ff33cc;">java</span>
			  <p class="skillbar-bar" style="background: #ff33cc;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar --> 
		</div>
		<div class="col-sm-6 stats_grid_right"> 
			<div class="skillbar" data-percent="75">
			  <span class="skillbar-title" style="background: #f88c5e;">Project Management</span>
			  <p class="skillbar-bar" style="background: #f88c5e;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="80">
			  <span class="skillbar-title" style="background: #3498db;">Requirements Eng.</span>
			  <p class="skillbar-bar" style="background: #3498db;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="80">
			  <span class="skillbar-title" style="background: #b2ec2f;">Presentation</span>
			  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			  
			<div class="skillbar" data-percent="70">
			  <span class="skillbar-title" style="background: #ff33cc;">Scheduling</span>
			  <p class="skillbar-bar" style="background: #ff33cc;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar --> 
			<div class="skillbar" data-percent="70">
			  <span class="skillbar-title" style="background: #f88c5e;">C / C++</span>
			  <p class="skillbar-bar" style="background: #f88c5e;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="60">
			  <span class="skillbar-title" style="background: #3498db;">C#</span>
			  <p class="skillbar-bar" style="background: #3498db;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="80">
			  <span class="skillbar-title" style="background: #b2ec2f;">Entrepreneurship</span>
			  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			  
			<div class="skillbar" data-percent="65">
			  <span class="skillbar-title" style="background: #ff33cc;">Marketing</span>
			  <p class="skillbar-bar" style="background: #ff33cc;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar --> 
		</div>
		<div class="clearfix"> </div>
	</div> 
</div>
<!-- //stats --> 
<!-- languages -->
<div class="portfolio" id="languages">
	<div class="container">
		<h3 class="w3l-title">My Languages</h3>
		<div class="agileits_portfolio_grids">
			<div class="col-md-3 agileits_portfolio_grid">
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/french_big.png">
						<img src="images/french.png" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Native Language</h4>
						</div>
					</a>
				</div>
			

			</div>
			<div class="col-md-3 agileits_portfolio_grid">
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/US_big.png">
						<img src="images/US.png" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Fluent</h4>
						</div>
					</a>
				</div>
		

			</div>
			<div class="col-md-3 agileits_portfolio_grid">
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/German_big.png">
						<img src="images/German.png" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Fluent</h4>
						</div>
					</a>
				</div>
	

			</div>
			<div class="col-md-3 agileits_portfolio_grid">
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/chinese_big.png">
						<img src="images/chinese.png" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Basic (Mandarin)</h4>
						</div>
					</a>
				</div>
		
	
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //languages -->
<!-- interests --> 
<div class="intra-w3l" id="interests">
	<div class="container">
		<h3 class="w3l-title">Interests</h3>
		<div class="agile-w3l-in">
			<i class="fa fa-camera" aria-hidden="true"></i>
			<p>PHOTOGRAPHY</p>
		</div>
		<div class="agile-w3l-in">
			<i class="fa fa-plane" aria-hidden="true"></i>
			<p>TRAVELLING</p>
		</div>
		<div class="agile-w3l-in">
			<i class="fa fa-book" aria-hidden="true"></i>
			<p>Reading</p>
		</div>
		<div class="agile-w3l-in w3l-intra-re">
			<i class="fa fa-futbol-o" aria-hidden="true"></i>
			<p>SPORT</p>
		</div>
		<div class="agile-w3l-in w3l-intra-re">
			<i class="fa fa-comments" aria-hidden="true"></i>
			<p>NETWORKING</p>
		</div>
	
	</div>
</div>
<!-- //interests --> 
<!-- experience -->
<div class="services-w3l" id="experience">
	<div class="container">
		<h3 class="w3l-title">Work Experience</h3>
		<div class="wthree_latest_albums_grids">
			<div class="cntl"> <span class="cntl-bar cntl-center"> <span class="cntl-bar-fill"></span> </span>
				<div class="cntl-states">
					<div class="cntl-state">
						<div class="cntl-content">
							<h4>Feb 2017 - </h4>
							<p>Software Architect</p>
							<div class="cntl-company">
							    <p>ITK ENGINEERING (Bosch Group)</p>
							</div>
						</div>
						<div class="cntl-image">
							<img src="images/ITK.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_cntl_image_pos">
								<p>Software and system development</p>
								<p>Project Management and coaching</p>
							</div>
						</div>
						<div class="cntl-icon cntl-center">01</div>
					</div>
					<div class="cntl-state">
						<div class="cntl-content">
							<h4>Oct 2014 - Jan 2017</h4>
							<p>APPLICATION ENGINEER</p>
							<div class="cntl-company">
							    <p>National Instruments (Germany & Switzerland)</p>
							</div>
						</div>
						<div class="cntl-image w3_cntl_image"><img src="images/NI1.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_cntl_image_pos">
								<p>Technical training teacher</p>
								<p>Post-Sales customer support</p>
								<p>Organization of Marketing Events</p>
							</div>						
						</div>
						<div class="cntl-icon cntl-center">02</div>
					</div>
					<div class="cntl-state">
						<div class="cntl-content">
							<h4>Feb 2014 - Jul 2014</h4>
							<p>APPLICATION ENGINEER INTERN</p>
							<div class="cntl-company">
							    <p>National Instruments (Germany)</p>
							</div>
						</div>
						<div class="cntl-image">
							<img src="images/w3.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_cntl_image_pos">
								<p>Technical customer support</p>
								<p>Software Defined Radio development</p>
							</div>
						</div>
						<div class="cntl-icon cntl-center">03</div>
					</div>
					<div class="cntl-state">
						<div class="cntl-content">
							<h4>Sep 2012 to Mar 2013</h4>
							<p>PROJECT DEVELOPER INTERN</p>
							<div class="cntl-company">
							    <p>TSC Inspection Systems (UK)</p>
							</div>
						</div>
						<div class="cntl-image">
							<img src="images/w4.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_cntl_image_pos">
								<p>Microcontroller based software and hardware development</p>
							</div>
						</div>
						<div class="cntl-icon cntl-center">04</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //experience -->
<!-- education -->
<div class="experience" id="education">
	<div class="container">
		<h3 class="w3l-title">My Education</h3>
		<div class="col-md-12 abt-left">
			<div class="accordion">
				<div class="accordion-section">
					<h5><a class="accordion-section-title" href="#accordion-2">
						<span>2011 - 2014</span>     Université de Technologie de Belfort-Montbéliard (UTBM)
					<i class="glyphicon glyphicon-chevron-down"></i>
					</a></h5>
					<div id="accordion-2" class="accordion-section-content">
						
						<h6>M. Sc. Electrical Engineering</h6>
						<ul>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="#">Specialization in Embedded Systems development</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="#">Exchange Semester at National Central University (Chungli, Taiwan)</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="#">6 months internship as an Embedded Developer at TSC Inspection Systems in Milton Keynes (UK)</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="#">6 months internship as an Application Engineer at National Instruments in Munich (GER)</a></li>
						</ul>
					</div>
				</div>
				<div class="accordion-section">
					<h5><a class="accordion-section-title" href="#accordion-3">
						<span>2011</span> University of Technology of Montreal
					<i class="glyphicon glyphicon-chevron-down"></i>
					</a></h5>
					<div id="accordion-3" class="accordion-section-content">
						<h6>Exchange year in Electrical Engineering Department</h6>
						<ul>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="#">Member of the student club “Eclipse” building a solar car</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="#">Electrical Engineering courses</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="#">4 months internship as a Software Developer at ENGIE in Montreal (CA)</a></li>
						</ul>
					</div>
				</div>
				<div class="accordion-section">
					<h5><a class="accordion-section-title" href="#accordion-4">
						<span>2008 - 2010</span> University of Haguenau (France)
					<i class="glyphicon glyphicon-chevron-down"></i>
					</a></h5>
					<div id="accordion-4" class="accordion-section-content">
						<h6>Electrical Engineering and Industrial Computing</h6>
						<ul>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="#">Technician Degree in Electrical Engineering</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="#">Exchange year abroad in Technical University of Offenburg (Germany)</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //education -->
<!-- introduce -->
<div class="confi-w3l" id="profile">
	<div class="container">
		<h3>Hi</h3>
		<p>It's my pleasure to introduce myself. I'm Marc Oesterlé and raised in France.</p>
		<p>I am a business oriented electronics engineer with a strong technical background coupled with overall business knowledge and contemporary Information technology skills.</p>
		<p>My positive attitude is my greatest strength. I am result oriented with a strong track record of performance in supporting and advising technical projects with hundreds of customers and partners from diverse industry sectors.</p>
	</div>
</div>
<!-- //introduce -->
<!-- //contact -->
<div class="address" id="contact">
	<div class="container">
		<h3 class="w3l-title">Contact Me</h3>
		<div class="address-row">
			<div class="col-md-6 address-left wow agile fadeInLeft animated" data-wow-delay=".5s">
				<div class="address-grid">
					<h4 class="wow fadeIndown animated" data-wow-delay=".5s">Get In Touch</h4>
					<form action="index.php" method="post">
						<input type="text" placeholder="Name" name="name" required="">
						<input type="email" placeholder="Email" name="email" required="">
						<input type="text" placeholder="Subject" name="subject" required="">
						<textarea placeholder="Message" name="mailmessage" required=""></textarea>
						<input type="submit" name="submit" value="SEND">
					</form>
				</div>
			</div>
			<div class="col-md-6 address-right">
				<div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
					<h4>Address</h4>
					<p>5 av. du Général Schneider, 67470 SELTZ, FRANCE</p>
				</div>
				<div class="address-info address-mdl wow fadeInRight animated" data-wow-delay=".7s">
					<h4>Phone </h4>
					<p>+33 6 38 69 97 10</p>
				</div>
				<div class="address-info agileits-info wow fadeInRight animated" data-wow-delay=".6s">
					<h4>Mail</h4>
					<p><a href="mailto:marc.oesterle1@gmail.com"> marc.oesterle1@gmail.com</a></p>

				</div>
			</div>
		</div>	
	</div>	
</div>
<!--//contact-->
<!-- footer -->
<div class="footer w3ls">
	<div class="container">
		<div class="w3ls-social-icons-2">
			<a class="facebook" href="https://www.facebook.com/marc.oesterle"><i class="fa fa-facebook"></i></a>
		<!--	<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>  -->
		<!--	<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>  -->
			<a class="linkedin" href="https://www.linkedin.com/in/marc-oesterle/"><i class="fa fa-linkedin"></i></a>
		<!--	<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>  -->
		</div>
	</div>
</div>
<div class="copyrights">
	<p>&copy; 2021 All rights reserved | Design by W3layouts</p>
</div>
<!-- //footer -->

<!-- js-scripts -->		
<!-- js -->

<!-- //HTTPS Redirect -->
<script>
if (location.protocol !== "https:") {
  location.protocol = 'https:';
}
</script>
<!-- //HTTPS Redirect -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->
	
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for-bottom-to-top smooth scrolling -->
<script type="text/javascript">
	$(document).ready(function() {
	/*
		var defaults = {
		containerID: 'toTop', // fading element id
		containerHoverID: 'toTopHover', // fading element hover id
		scrollSpeed: 1200,
		easingType: 'linear' 
		};
	*/								
	$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //for-bottom-to-top smooth scrolling -->
<!-- menu-script -->
<script>
	(function($){
		// Menu Functions
		$(document).ready(function(){
		$('#menuToggle').click(function(e){
			var $parent = $(this).parent('.menu');
		  $parent.toggleClass("open");
		  var navState = $parent.hasClass('open') ? "hide" : "show";
		  $(this).attr("title", navState + " navigation");
				// Set the timeout to the animation length in the CSS.
				setTimeout(function(){
					console.log("timeout set");
					$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
				}, 200);
			e.preventDefault();
		});
	  });
	})(jQuery);
</script>
<!-- //menu-script -->
<!-- baneer-js -->
<script src="js/responsiveslides.min.js"></script>
<script>
	// You can also use "$(window).load(function() {"
	$(function () {
	  // Slideshow 4
	  $("#slider").responsiveSlides({
		auto: true,
		pager:false,
		nav:false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	  });

	});
</script>				 
<!-- //baneer-js -->
<!-- skills -->
<script src="js/skill.bars.jquery.js"></script>
<script>
	$(document).ready(function(){
		
		$('.skillbar').skillBars({
			from: 0,
			speed: 4000, 
			interval: 100,
			decimals: 0,
		});
		
	});
</script>
<!-- //skills --> 
<!-- timeline -->
<script type="text/javascript" src="js/jquery.cntl.js"></script> 
<script type="text/javascript">
	$(document).ready(function(e){
		$('.cntl').cntl({
			revealbefore: 300,
			anim_class: 'cntl-animate',
			onreveal: function(e){
				console.log(e);
			}
		});
	});
</script>
<!-- //timeline -->
<!-- accordion -->
<script>
	jQuery(document).ready(function() {
	function close_accordion_section() {
		jQuery('.accordion .accordion-section-title').removeClass('active');
		jQuery('.accordion .accordion-section-content').slideUp(300).removeClass('open');
	}

	jQuery('.accordion-section-title').click(function(e) {
		// Grab current anchor value
		var currentAttrValue = jQuery(this).attr('href');

		if(jQuery(e.target).is('.active')) {
			close_accordion_section();
		}else {
			close_accordion_section();

			// Add active class to section title
			jQuery(this).addClass('active');
			// Open up the hidden content panel
			jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
		}

		e.preventDefault();
	});
	});
</script>
<!-- //accordion -->
<!-- for languages -->
<script src="js/jquery.tools.min.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/jquery.cm-overlay.js"></script>
<script>
	$(document).ready(function(){
		$('.cm-overlay').cmOverlay();
	});
</script>
<!-- //for languages -->				
<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->

<!-- //js-scripts -->

</body>
</html>