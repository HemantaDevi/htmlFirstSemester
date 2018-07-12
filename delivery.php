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
	<title> Delivery Page</title> 
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
	<link rel="shortcut icon" href="favicon.ico">

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

	<!--bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<style>
#book1{
  font-family: playfair display;
}
</style>
<link rel="shortcut icon" href="images/delivery.png">
	</head>
	<body>

	<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-1" style="font-size:20px">
						<a href="index.php" data-nav-section="Home" target="_blank">Home</a>
						<a href="aboutus.php" data-nav-section="About Us" target="_blank">About Us</a>
						<a href="delivery.php" data-nav-section="Delivery" target="_blank">Delivery</a>
						</div>
					<div class="fh5co-logo">
						<a href="index.php" target="_blank">Delish On The Go</a>
						<!--<a href="index.html">On The Go </a>-->
					</div>
          <div class="fh5co-menu-2"  style="font-size:20px" >
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
		<div class="container-fluid" id="book1">
			<div class="jumbotron">
			<h2 align="center">All Restaurants around the Island</h2>
		<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">Le Capitaine Restaurant</h3>
    		<img src="images/capitaine2.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Blue Lagoon Restaurant</h3>
   			<img src="images/bluelagoon2.jpg" class="img-circle center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">Cocoloko</h3>
    		<img src="images/cocoloko1.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div><br/>
<!--second Row-->
		<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">Happy Rajah</h3>
    		<img src="images/happyrajah1.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Mc Donald Grand Baie</h3>
   			<img src="images/mcdonald3.jpg" class="img-circle center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">Saffron Grill</h3>
    		<img src="images/saffron2.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>
    	<!--Third row-->
    	<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">Nando's La Croisette</h3>
    		<img src="images/nando2.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Luigi's Italian Pizzeria</h3>
   			<img src="images/luigi3.jpg" class="img-circle center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">Panarotti Grand Baie</h3>
    		<img src="images/panarotti2.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>
  		<!--fourth row-->
  		<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">Ace pizza Restaurant</h3>
    		<img src="images/pizza3.jpg" class="img-circle center-block" width="75%" height="250px"/>><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Bouillon Chinese Restaurant</h3>
   			<img src="images/chinese3.jpg" class="img-circle center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">Burger's Corner</h3>
    		<img src="images/corner2.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>
  		</div>
  		<!--fifth Row-->
  		<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">Chick N Bite</h3>
    		<img src="images/chick1.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Mc Donald Riche Terre</h3>
   			<img src="images/mcdonald3.jpg" class="img-circle center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">Gloria Fast Food</h3>
    		<img src="images/gloria3.jpg" class="img-circle  center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
    	</div>
  		</div>
  		<!--sixth Row-->
  		<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">Namaste Restuarant</h3>
    		<img src="images/namaste1.jpg" class="img-circle  center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">El mondo</h3>
   			<img src="images/paris3.jpg" class="img-circle  center-block"  width="75%" height="250px"/>><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">The tasty Grill</h3>
    		<img src="images/tasty1.jpg" class="img-circle  center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
    	</div>
  		</div>
<!--seventh row-->
<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">Amigos Restaurant</h3>
    		<img src="images/amigos3.jpg" class="img-circle  center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Sangam Taj Restaurant</h3>
   			<img src="images/sangam1.jpg" class="img-circle  center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">Sitar Indian Restaurant</h3>
    		<img src="images/sitar.jpg" class="img-circle  center-block" width="75%" height="250px"/>><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
    	</div>
  		</div>
  		<!--eighth row-->
  		<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">Happy Rajah Phoenix</h3>
    		<img src="images/happyrajah3.jpg" class="img-circle  center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Mc Donald Phoenix</h3>
   			<img src="images/mcdonald3.jpg" class="img-circle  center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">Ocean Basket Phoenix</h3>
    		<img src="images/ocean1.jpg" class="img-circle  center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
    	</div>
  		</div>
  		<!--ninth row-->
	<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">Nando's Phoenix</h3>
    		<img src="images/nando3.jpg" class="img-circle  center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Subway Phoenix</h3>
   			<img src="images/subway1.jpg" class="img-circle  center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">KFC Phoenix</h3>
    		<img src="images/kfc5.jpg" class="img-circle  center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
    	</div>
  		</div>
  		<!--tenth row-->
  		<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">3 Peppers Restaurant</h3>
    		<img src="images/pepper1.jpg" class="img-circle  center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Buddy's Burger</h3>
   			<img src="images/buddy1.jpg" class="img-circle  center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">Chicken Express</h3>
    		<img src="images/chicken2.jpg" class="img-circle  center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
    	</div>
  		</div>
  		<!--eleventh row-->
  		<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">Etape Gourmande</h3>
    		<img src="images/etape2.jpg" class="img-circle  center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Mc Donald Trianon</h3>
   			<img src="images/mcdonald3.jpg" class="img-circle  center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">Flame and Grill Restaurant</h3>
    		<img src="images/flame2.jpg" class="img-circle  center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
    	</div>
  		</div>
  		<!--twelveth row-->
  		<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">Frandy's Restaurant</h3>
    		<img src="images/frandy3.jpg" class="img-circle  center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Glenn's Grill Restaurant</h3>
   			<img src="images/grill3.jpg" class="img-circle  center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">La Rose de Damas</h3>
    		<img src="images/rose1.jpg" class="img-circle  center-block" width="75%" height="250px"/><br/>
    		<input type="button" class="btn btn-success center-block" value="Order Now" onclick=" relocate_home()">

      <script>
      function relocate_home()
      {
          location.href = "web/rosemenu.php";
      } 
      </script>

    	</div>
  		</div>
  		<!--thirteenth row-->
  		<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">Apocalypes Restaurant</h3>
    		<img src="images/apo2.jpg" class="img-circle  center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success  center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Bindaas Thali Hut</h3>
   			<img src="images/hut2.jpg" class="img-circle  center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">Bite me! Sushi</h3>
    		<img src="images/sushi3.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>
  		</div>

  	<!--fourteenth row-->
  	<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">Chick Pizz</h3>
    		<img src="images/chick1.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Flame and Grill</h3>
   			<img src="images/flame1.jpg" class="img-circle center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">Las Vegas Fast Food</h3>
    		<img src="images/las2.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>
  		</div>
  		<!--fifteenth row-->
  		<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">Nobbyes Resto and Bar</h3>
    		<img src="images/pasta2.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Pabs Palace</h3>
   			<img src="images/pabs3.jpg" class="img-circle center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">Le Sapin D'or</h3>
    		<img src="images/sapin1.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>
  		</div>
  		<!--sixteeth row-->
  		<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">Chez Patrick Restaurant</h3>
    		<img src="images/patrick1.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Le jardin De Beau Vallon Restaurant</h3>
   			<img src="images/jardin3.jpg" class="img-circle center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">Le Copain D'abbord</h3>
    		<img src="images/copain2.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>
  		</div>
  		<!--seventeenth row-->
  		<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">L'Ajoupa Restaurant</h3>
    		<img src="images/ajoupa3.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Restaurant Dragon de Chine</h3>
   			<img src="images/dragon1.jpg" class="img-circle center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">Mafia Grill Restaurant</h3>
    		<img src="images/mafia1.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>
  		</div>
  		<div class="row">
    	<div class="col-sm-4">
    		<h3 align="center">La Belle Creole Restaurant</h3>
    		<img src="images/creole2.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>

   		<div class="col-sm-4">
   			<h3 align="center">Monte Carlo Restaurant</h3>
   			<img src="images/carlo1.jpg" class="img-circle center-block"  width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
   		</div>
    	<div class="col-sm-4">
    		<h3 align="center">KFC MAhebourg</h3>
    		<img src="images/kfc3.jpg" class="img-circle center-block" width="75%" height="250px"/><br/>
    		<button type="button" class="btn btn-success center-block">Order Now</button>
    	</div>
  		</div>



		</div>
	</div>



		</body>
		</html>