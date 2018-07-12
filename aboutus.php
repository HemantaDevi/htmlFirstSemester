<?
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
	<title> About Us </title> 
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
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="images/delivery.png">

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	
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

	<link rel="stylesheet" href="aboutstyle.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
        
      
	</head>
	<body>
	 <!--style="background-image: url(images/aboutback.jpg); background-size:cover; background-opacity:0.5%">-->
		<div id="img-overlay">
			<img src="images/chef.jpg" />
        <div id="overlay">
        <style>
 		#img-overlay img {
  		margin: 0 auto;
  		max-height: 100%;
  		opacity: 0.2;
    	filter: alpha(opacity=100);
		}
		#overlay 
		{
  		position: absolute;
  		top: 0;
  		left: 0;
  		width: 100%;
  		height: 100%
  		background-color: rgb(255,255,255);
  		}   
  		</style>

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
				</div>
			</div>
			<h1>
					<p style="text-align: center; font-family:playfair display; font-weight:900; color:#000080 ;"> ABOUT DELISH ON THE GO: </p><br/>

					<div id="paragraph">
						<style>
						#paragraph{
							font-family:playfair display;
							font-size: 60%;
							color: black;
							font-weight:900;
							}
						</style>

						You can now get your favourite dishes from a restaurant near you delivered right at your doorstep. All it takes is a click!

						As Mauritius' premier online ordering portal for local takeaway restaurants, our aim is to serve the people of a new era with a different and more competitive style. We want to add convenience to the life of fast food lovers with the most wonderful dining experience at your doorsteps.

						Our goal is to make it quick and simple to find your favourite local restaurants that service your area. The process is easy: </br>

						<ul>
							&nbsp;<li>Create your free account</li>
							<li>Enter your Region</li>
							<li>Select restaurant you want to order from</li>
							<li>Browse the menu and select the food you want</li>
							<li>Send the order and sit back while your food is prepared and delivered</li>
   						</ul><br/>

							We are a Mauritian owned and operated business that aims to provide exellent coverage nationwide. Starting out with a few restaurants, mainly across the main towns and cities across the island, we are constantly looking for new partner restaurants, that can help us expand our coverage.
					</h1>
				</div>
			</div>
		</div>
		
		</body>
		</html>