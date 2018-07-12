<?php 
session_start();
	$servername= "localhost";
	$username = "root";
	$password = "";
	$db= "restaurant_page";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $db);
	// Check connection
	if (!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
 ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Delish on the Go </title> <!--Remove dash __>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" /

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

	<link rel="shortcut icon" href="images/delivery.png">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link href="img src=delivery.ico" rel="shortcut icon">
	</head>
	
	<body>

	<div id="fh5co-container">
		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">
				
				<div class="fh5co-overlay"></div> <!-- Make picture transparent -->
				<div class="fh5co-text">
					<div class="container"> <!-- No diffrence when removed -->
						<div class="row">
							<h1 class="to-animate">Delish</h1>
							<h1 class="to-animate">On The Go</h1>
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   <li style="background-image: url(images/lasagna.jpg);" data-stellar-background-ratio="0.1"></li>
			   	<li style="background-image: url(images/indian.jpg);" data-stellar-background-ratio="0.1"></li>
			   	<li style="background-image: url(images/burger.jpg);" data-stellar-background-ratio="0.1"></li>
			  	</ul>
			  </div>
			</div>
		
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-1">
						<a id= "index-link" href="index.php" target="_blank" title="Home">Home</a>
						<a id= "about-link" href="aboutus.php" title="About Us" target="_blank">About Us</a>
						<a id= "delivery-link" href="delivery.php" target="_blank" title="Delivery">Delivery</a>	
					</div>
					<div class="fh5co-logo">
						<a id= "index-link" href="index.php" target="_blank" title="index">Delish On The Go</a>
						<!--<a href="index.html">On The Go </a>-->
					</div>
					<div class="fh5co-menu-2">
						<a id= "book-link" href="book.php" target="_blank" title="book" >Book a Table</a>
						<a id="Registration-link" href="Registration.php" target="_blank" title="Sign up">Sign Up</a>
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
			<div style= "background-image:url(images/chef.jpg);background-size:cover; color:black; padding: 80px; text-align:center;">
			<form action="restaurant_page.php" method="post">
			<input list="Region" placeholder="Enter Region" name="txt_region">
			<datalist id="Region">
				<?php 
					$get_region_query = "SELECT DISTINCT(Region) FROM restaurant_page";
					$regions = mysqli_query($db, $get_region_query);

					if (mysqli_num_rows($regions) > 0) {
						while ($row = mysqli_fetch_assoc($regions)) {
							echo "<option>{$row['Region']}</option>";
						}
					}
				 ?>
			</datalist>
			<input type="submit"/>
		</form>
		 </div>
		

		<div id="fh5co-sayings">
			<div class="container">
				<div class="row to-animate">

					<div class="flexslider">
						<ul class="slides">
21							
							<li>
								<blockquote>
									<p>&ldquo;Cooking is an art, but all art requires knowing something about the techniques and materials&rdquo;</p>
									<p class="quote-author">&mdash; Nathan Myhrvold</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Give a man food, and he can eat for a day. Give a man a job, and he can only eat for 30 minutes on break.&rdquo;</p>
									<p class="quote-author">&mdash; Lev L. Spiro</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Find something you’re passionate about and keep tremendously interested in it.&rdquo;</p>
									<p class="quote-author">&mdash; Julia Child</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Never work before breakfast; if you have to work before breakfast, eat your breakfast first.&rdquo;</p>
									<p class="quote-author">&mdash; Josh Billings</p>
								</blockquote>
							</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
				
	  <div style="background-color:white ;color:black ;width:100%; padding:20px;font-family:times new roman;font-size:120%;text-align:center">
	   Policy <br/>
	   &copy;Copyright(All Rights Reserved)<br/>
	   <a href= "terms_and_conditions.php" target="_blank"> Terms and Condition</a>
			
		</ul>
	</div>
<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
    <script>
    	$("#about-link").click(function(){
    		window.location.href="aboutus.php";
    	});
    	$("#index-link").click(function(){
    		window.location.href="index.php";
    	});
    	$("#Registration-link").click(function(){
    		window.location.href="Registration.php";
    	});
    	$("#log_in_btn").click(function(){
    		window.location.href="log_in.php";
    	});
    	$("#log_out_btn").click(function(){
    		window.location.href="logout.php";
    	});
    	$("#delivery-link").click(function(){
    		window.location.href="delivery.php";
    	});
    	$("#index-link").click(function(){
    		window.location.href="index.php";
    	});
    	$("#book-link").click(function(){
    		window.location.href="book.php";
    	});

</script>
	</body>
</html>

