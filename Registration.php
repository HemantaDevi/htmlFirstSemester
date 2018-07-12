<?php


session_start();
$taken = False;


if(isset($_POST["email"]))
{

try {

$connect = new PDO('mysql:host=localhost;dbname=restaurant_page','root','');

$statement = $connect->prepare("SELECT * FROM register
 WHERE email=:email"); 
$statement->bindParam(':email', $email);





$statement->execute(); 

$result = $statement->fetchAll(); 

if (empty($result)) { 
    try {
    	//correction is here
    	$connect2 = mysqli_connect('localhost','root','','restaurant_page');
    	$email = $_POST["email"];
	$firstname = $_POST["txt_name"];
	$lastname = $_POST["txt_lname"];
	$phone = $_POST["phonenum"];
	$password = $_POST["password"];
	$address = $_POST["txt_add"];
	$allergies = $_POST["food_allergies"];
	$specialdelivery = $_POST["instructions"];
	$sql = "INSERT INTO register (firstname, lastname, email, phone,password,address,allergies,specialdelivery) 
    VALUES ('$firstname', '$lastname','$email','$phone','$password','$address','$allergies','$specialdelivery')";
    mysqli_query($connect2,$sql);


    try{
    	
    	$email = $_POST["email"];
	$password = $_POST["password"];
	
	$sql = "SELECT * FROM register
    WHERE email='$email' and password ='$password'";
    if (mysqli_num_rows(mysqli_query($connect2,$sql))){
    $_SESSION['username']=$email;
    }
    header("Location: log_in.php");

    }


    catch(exception $e){
     echo "Unfortunately it seems we are experiencing an issue, please try again later";	
    }
    
/*
    try { 
    $data = array(); 
    $statement3 = $connect->prepare("SELECT * FROM register
    WHERE email=:email 
    AND password=:password"); //prepare query for execution
    $statement3->bindParam(':email', $email);
    $statement3->bindParam(':password', $password);


    
    $statement3->execute(); 

    $result3 = $statement3->fetchAll(); 
    
    foreach($result3 as $row) 
    {
     $data[] = array(
      'email'   => $row["email"]
     );
    }
        $_SESSION["email"]=$row["email"]; 
        
        
}
catch(exception $e)
{
    echo $e;
}
*/
    }
catch(exception $e)
{
    echo "Unfortunately it seems we are experiencing an issue, please try again later";
}

}
else
{
    $taken = True;
}

}
catch(exception $e)
{
    //echo $e;
    echo "Unfortunately it seems we are experiencing an issue, please try again later";
}
}
?>

<?php
/*
if(ISSET($_POST["email"])){

$servername= "localhost";
$username = "root";
$password = "";
$db= "restaurant_page";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

$email = $_POST["email"];
$firstname = $_POST["txt_name"];
$lastname = $_POST["txt_lname"];
$phone = $_POST["phonenum"];
$password = $_POST["password"];
$address = $_POST["txt_add"];
$allergies = $_POST["food_allergies"];
$specialdelivery = $_POST["instructions"];


// Check connection
if (!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
$sql= "SELECT * FROM register where email='$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
		echo "<script>alert(Email address already exists)</script>";
} else {
	$sql1 = "INSERT INTO 'register' ('firstname', 'lastname', 'email', 'phone', 'password', 'address', 'allergies', 'specialdelivery')
	VALUES ('firstname', 'lastname', 'email', 'phone', 'password', 'address', 'allergies', 'specialdelivery')";

if (mysqli_query($conn, $sql1)) {
	echo "<script>alert(New record created successfully)</script>";
	header("location:index.php");
} else {
	$_SESSION['message'] = 'User could not be added';
}
}
		mysqli_close($conn);
		
	}
*/
		?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Create an account </title> 
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
	color:#581845  ;
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

		<form action="Registration.php" method="post">
			<p><h2>Create an account</h2></p>
		<p><input type="text" name="txt_name" placeholder=" First Name" required/> <input type="text" name="txt_lname" placeholder=" Last Name" required/></p>
		<p><input type="email" name="email" placeholder=" Email" required/> <input type="tel" name="phonenum" placeholder=" Phone" required/></p>
		<p><input type="password" name="password" placeholder=" Password" required/> <input type="text" name="txt_add" placeholder=" Address" required/></p>
		<textarea rows="5" cols="22" name="food_allergies" placeholder=" Food allergies (OPTIONAL)"></textarea> <textarea rows="5" cols="22" name="instructions" placeholder=" Special delivery instructions (OPTIONAL)"></textarea><br/>
		<input type="checkbox" name="terms_and_conditions" value="I agree to terms & conditions" required/><span style="color:black">I agree to the </span><a href="terms_and_conditions.php"><span style="color:black"><span style="text-decoration: underline">terms & conditions</span></span></a><br/>
		<input type= "submit" value="Register"/><br/><br/>

	</form>
		</body>
		</html>