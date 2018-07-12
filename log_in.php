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
	<title> Log in </title> 
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


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
	form{
	text-align:center;
	}

	body { 
    background-image: url(images/chef.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
    background-size: cover;
	}

	h2{
	color:#581845;
	font-weight:900;
	}

	input{
    border: 1px solid black ;
    border-radius: 4px;
	}

	input:focus {
    border: 3px solid #555;
	}

	textarea{
    border: 1px solid black ;
    border-radius: 4px;
	}

	.space{
	line-height: 30px;
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
				</div>
			</div>

		<form name="frm_login" action="login.php" method="get">
			<p class="space"><h2>Log in</h2></p>
		<p class="space"><input type="email" name="email" placeholder=" Email" required/></p>
		<p class="space"><input type="password" name="password" placeholder=" Password" required/></p>
		<input type= "submit" value="Log in"/>


	</form>
		</body>
		</html>