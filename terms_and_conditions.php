<?php

session_start();


?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>Terms and Conditions</title> 
	<!--Remove dash __>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
 
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="images/delivery.png">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--link for rating-->

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>

	<!--make an image fade-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
	.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    }
    </style>
	</head>
	<body>

	<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-1">
						<a href="index.php" data-nav-section="Home" target="_blank">Home</a>
						<a href="aboutus.php" data-nav-section="About Us" target="_blank">About Us</a>
						<a href="delivery.php" data-nav-section="Delivery" target="_blank">Delivery</a>
						
					</div>
					<div class="fh5co-logo">
						<a href="index.php" target="_blank">Delish On The Go</a>
						<!--<a href="index.html">On The Go </a>-->
					</div>
					<div class="fh5co-menu-2">
						<a href="book.php" data-nav-section="Book a Table" target="_blank">Book a Table</a>
						<a href="Registration.php" data-nav-section="Sign up" target="_blank">Sign Up</a>
						<?php 

							if (!isset($_SESSION['email'])) {
						 ?>
						 	<a href="log_in.php" id='log_in_btn' data-nav-section="Log In" target="_blank">Log In</a>
						 <?php
						 	}
						 	else {
						 ?>
						 	<a href="logout.php" id='log_out_btn' data-nav-section="Log In" target="_blank">Log Out</a>
						 <?php
							 }
						   ?>
					</div>
				</div>
				<div id="img-overlay" style= "background-image:url(images/chef.jpg); width:100%; height: 300px ; background-size:cover; ">
					<div class="centered"><h1 style="color: black ; font-weight: 900;padding-top:120px">TERMS AND CONDITIONS:</h1></div>
				</div>
				</div>
		</div>
		<p ><h3 style="font-family: playfair display ; text-align: center; font-weight: 900">DELISH ON THE GO: TERM OF USE</h3></p>
		<p style="text-align: left ;padding-left: 100px"> 

		These Terms of Use govern your use of the delish on the go website and, unless otherwise stated, to your use of any other website operated on behalf of DELISH ON THE GO (collectively the “Websites”). Please read these Terms of Use carefully before using the Websites. </p>

		<h3 style="font-weight:900 ; padding-left: 100px">Agreement to Terms </h3>
	    <p style="text-align: left ;padding-left: 100px"> 

		By using the Websites, you agree to these Terms of Use and the DELISH ON THE GO General Online Privacy Policy (for visitors who are eighteen years of age or over) or the DELISH ON THE GO Children’s Online Privacy Policy (for visitors who are under eighteen (18) years of age) which are incorporated herein by reference. Each time you use the Websites, you reaffirm your acceptance of the then-current Terms of Use. If you do not wish to be bound by these Terms of Use, your only remedy is to discontinue using the Websites. 

		DELISH ON THE GO may change these Terms of Use at any time and in its sole discretion. The modified Terms of Use will be effective immediately upon posting and you agree to the new posted Terms of Use by continuing your use of the Websites. You are responsible for staying informed of any changes. If you do not agree with the modified Terms of Use, your only remedy is to discontinue using the Websites. </p>

		<h3 style="font-weight:900; padding-left: 100px">Accounts </h3>
		<p style="text-align: left ;padding-left: 100px"> 
		You may be required to create an account and specify a password to use certain features on the Websites. You agree to provide, maintain and update true, accurate, current and complete information about yourself as prompted by the registration processes. You may not impersonate any person or entity or misrepresent your identity or affiliation with any person or entity, including using another person’s username, password, or other account information. 

		You are entirely responsible for maintaining the confidentiality of your password and your account. And you are entirely responsible for all activity made by you or anyone that uses your account. You agree to safeguard your password from access by others. If you believe that your account has been compromised, you must immediately contact us by mail at: support@foodpanda.ph or send a message to our live-chat service. You agree to indemnify and hold harmless foodpanda for losses incurred by DELISH ON THE GO or another party due to someone else using your account as a result of your failure to use reasonable care to safeguard your password. 
        </p>
        <h3 style="font-weight:900 ; padding-left: 100px">Payment:</h3>
        <p style="text-align: left ;padding-left: 100px"> 
        CASH ON DELIVERY
    	</p>
    	<h3 style="font-weight:900 ; padding-left: 100px">Termination:</h3>
    	<p style="text-align: left ;padding-left: 100px"> 
    	DELISH ON THE GO has the right to terminate your account and access to the Websites for any reason, including, without limitation, if DELISH ON THE GO, in its sole discretion, considers your use to be unacceptable, or in the event of any breach by you of the Terms of Use.DELISH ON THE GO may, but shall be under no obligation to, provide you a warning prior to termination of your use of the Websites. 
        </p>
        <h3 style="font-weight:900 ; padding-left: 100px">Contact Us:</h3>
        <p style="text-align: left ;padding-left: 100px"> 
        	Questions? Comments? Please send an email to us at <a href="mailto:delishonthego.mu">delishonthego</a> <br/>
        	&copy;Copyright(All Rights Reserved)
        </p>

		</body>
		</html>			