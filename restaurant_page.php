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

	// Grab region selected
	$region = $_POST['txt_region'];

	// Get all info for selected region
	$detail_query = "SELECT * FROM restaurant_page WHERE Region='{$region}'";
	$details = mysqli_query($conn, $detail_query);
 ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title><?php echo $region; ?></title> 
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
	<!--style for rating-->
    <style>
	.checked {
    color: orange;
	}

	/*
	#capitaine{
		border: 2px solid black;
		width:25%;
		text-align: "playfair display";
		font-size:15px;
		margin-right:30px;
		margin-top:15px;
		margin-bottom: 20px;
		border-radius: 4px;
		padding-bottom: 30px;
		margin-left: 60px;
		border-color:gray;
	}
	#bluelagoon{
		border: 2px solid black;
		position: absolute;
		text-align:"playfair display";
		font-size:15px;
		width:25%;
		top:50%;
		margin-left:37%;
		margin-top:-13%;
		border-radius: 4px;
		padding-bottom: 30px;
		border-color:gray;
	}
	#cocoloko{
		border: 2px solid black;
		position:absolute;
		text-align:"playfair display";
		font-size:15px;
		width:25%;
		top:25%;
		right:6%;
		margin-top:-10px;
		border-radius: 4px;
		padding-bottom: 30px;
		border-color:gray;

	}
	#happyrajah{
		border: 2px solid black;
		position: absolute;
		text-align:"playfair display";
		font-size:15px;
		width:25%;
		top:50%;
		margin-left:60px;
		margin-top: 33%;
		border-radius: 4px;
		padding-bottom: 30px;
		border-color:gray;
	}
	#mcdonald{
		border: 2px solid black;
		position: absolute;
		text-align:"playfair display";
		font-size:15px;
		width:25%;
		top:50%;
		margin-left:37%;
		margin-top:33%;
		border-radius: 4px;
		padding-bottom: 30px;
		border-color:gray;
		
	}

	#saffron{
		border: 2px solid black;
		position:absolute;
		text-align:"playfair display";
		font-size:15px;
		width:25%;
		top:113%;
		right:6%;
		margin-top:28px;
		border-radius: 4px;
		padding-bottom: 30px;
		border-color:gray;
	}

	#nando{
		border: 2px solid black;
		width:25%;
		text-align: "playfair display";
		font-size:15px;
		margin-right:30px;
		margin-top:50%;
		margin-bottom: 20px;
		border-radius: 4px;
		padding-bottom: 30px;
		margin-left: 60px;
		border-color:gray;
	}
	#luigi{
		border: 2px solid black;
		position: absolute;
		text-align:"playfair display";
		font-size:15px;
		width:25%;
		margin-left:37%;
		margin-top:-44%;
		border-radius: 4px;
		padding-bottom: 30px;
		border-color:gray;
		}
	#panarotti{
		border: 2px solid black;
		position:absolute;
		text-align:"playfair display";
		font-size:15px;
		width:25%;
		right:6%;
		margin-top:-44%;
		border-radius: 4px;
		padding-bottom: 30px;
		border-color:gray;
	}
	*/

	div.restaurant {
		border: 1px solid black;
		width: 30%;
		float: left;
		margin: 1em 1.5%;
		min-height: 590px;
	}

	div.clearfix:after {
		content: "";
		display: table;
		clear: both;
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
						 	<a href="log_in.php" data-nav-section="Log In" target="_blank">Log In</a>
						 <?php
						 	}
						 	else {
						 ?>
						 	<a href="logout.php" data-nav-section="Log In" target="_blank">Log Out</a>
						 <?php
							 }
						   ?>
					</div>
				</div>
				</div>
			</div>
			
					<h1 style="text-align:center;font-family:playfair display;font-weight:900"><?php echo strtoupper($region); ?> RESTAURANTS:</h1>


					<div class="clearfix">
					<?php 
						$count = 1;
						while($row = mysqli_fetch_assoc($details)){
					 ?>

					 	<div id='<?php echo $count++; ?>' class='restaurant'>
							<div class="w3-content w3-section" style="max-width:250%">
	  							<img class="mySlides1 w3-animate-fading" src='<?php echo $row['Image']; ?>' style="width:100%;  height:250px">
							</div>

							<h3><?php echo $row['Restaurant_name']; ?></h3>
		
							<p>Ratings: <?php echo $row['Ratings']; ?></p>
							<!--
							3.3<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star-half-empty checked"></span>
							<span class="fa fa-star"></span>
							-->
						

							<ul>
								<li>Address: <?php echo $row['Address']; ?></li>
								<li>Hours: <?php echo $row['Hours']; ?> </li>
								<li>Phone: <?php echo $row['Phone']; ?></li>
								

								<?php 
							if (!isset($_SESSION['email'])) {
						 	?>
						 	<li>Menu: <a href='log_in.php'>Menu</a></li>
						 	<?php
						 	}
						 	else {
						 	?>
						 	<li>Menu: <a href='web/rosemenu.php'>Menu</a></li>
						 	<?php
							 }
						   ?>
								</div>
								<?php
								}
								?>
					            </div>
					            
					</body>
					</html>
   		
   		<!--
   			
		<script>
		var myIndex = 0;
		carousel();
		function carousel() {
    	var i;
    	var x = document.getElementsByClassName("mySlides");
    	for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    	}
    	myIndex++;
    	if (myIndex > x.length) {myIndex = 1}    
    	x[myIndex-1].style.display = "block";  
    	setTimeout(carousel, 5000);    
		}
	</script>

        
		<script>
		var myIndex = 0;
		carousel();
		function carousel() {
    	var i;
    	var x = document.getElementsByClassName("mySlides1");
    	for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    	}
    	myIndex++;
    	if (myIndex > x.length) {myIndex = 1}    
    	x[myIndex-1].style.display = "block";  
    	setTimeout(carousel, 5000);    
		}
	</script>
		

		<script>
		var myIndex = 0;
		carousel();
		function carousel() {
    	var i;
    	var x = document.getElementsByClassName("mySlides2");
    	for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    	}
    	myIndex++;
    	if (myIndex > x.length) {myIndex = 1}    
    	x[myIndex-1].style.display = "block";  
    	setTimeout(carousel, 5000);    
		}
	</script>

		
		<script>
		var myIndex = 0;
		carousel();
		function carousel() {
    	var i;
    	var x = document.getElementsByClassName("mySlides3");
    	for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    	}
    	myIndex++;
    	if (myIndex > x.length) {myIndex = 1}    
    	x[myIndex-1].style.display = "block";  
    	setTimeout(carousel, 5000);    
		}
		</script>

		
		<script>
		var myIndex = 0;
		carousel();
		function carousel() {
    	var i;
    	var x = document.getElementsByClassName("mySlides4");
    	for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    	}
    	myIndex++;
    	if (myIndex > x.length) {myIndex = 1}    
    	x[myIndex-1].style.display = "block";  
    	setTimeout(carousel, 5000);    
		}
		</script>

		
		<script>
		var myIndex = 0;
		carousel();
		function carousel() {
    	var i;
    	var x = document.getElementsByClassName("mySlides5");
    	for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    	}
    	myIndex++;
    	if (myIndex > x.length) {myIndex = 1}    
    	x[myIndex-1].style.display = "block";  
    	setTimeout(carousel, 5000);    
		}
		</script>

		
		<script>
		var myIndex = 0;
		carousel();
		function carousel() {
    	var i;
    	var x = document.getElementsByClassName("mySlides6");
    	for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    	}
    	myIndex++;
    	if (myIndex > x.length) {myIndex = 1}    
    	x[myIndex-1].style.display = "block";  
    	setTimeout(carousel, 5000);    
		}
		</script>

		
		<script>
		var myIndex = 0;
		carousel();
		function carousel() {
    	var i;
    	var x = document.getElementsByClassName("mySlides7");
    	for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    	}
    	myIndex++;
    	if (myIndex > x.length) {myIndex = 1}    
    	x[myIndex-1].style.display = "block";  
    	setTimeout(carousel, 5000);    
		}
		</script>

		
		<script>
		var myIndex = 0;
		carousel();
		function carousel() {
    	var i;
    	var x = document.getElementsByClassName("mySlides8");
    	for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    	}
    	myIndex++;
    	if (myIndex > x.length) {myIndex = 1}    
    	x[myIndex-1].style.display = "block";  
    	setTimeout(carousel, 5000);    
		}
		</script>
	-->
		
	