
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
  <title> Book Online </title> 
  <!--Remove dash __>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />

  <!-- 
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by FREEHTML5.CO
    
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:     https://www.facebook.com/fh5co

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
  </head>
  <body>

  <div class="js-sticky">
      <div class="fh5co-main-nav" >
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
      <?php
            if(isset($_POST['submit'])){
              $firstname = $_POST['firstname'];
              $lastname = $_POST['lastname'];
              $date = $_POST['Date'];
              $time = $_POST['time'];
              $numberofperson = $_POST['quantity'];
              $mob = $_POST['phone'];
              $addQuery = "INSERT INTO bookonline VALUES ('$firstname', '$lastname', '$date', '$time',$numberofperson ,'$mob', NULL)";
              $sql = mysqli_query($conn, $addQuery);
              if($sql){
                echo "<script>alert('Your Table Reserved Successfully');</script>";
                mysqli_close($conn);
              }
              else {
                echo "<script>alert('Error');</script>";
                mysqli_close($conn);
                header("Location: index.php"); 
              }
              
            }
            

            ?>

    <form name="frm_login" action="booktable.php" method="post">
      <p><h2>Book Online</h2></p>
    <p><input type="text" name="firstname" placeholder=" First Name" size="35" required /> 
       <input type="text" name="lastname" placeholder=" Last Name" size="35"  required/></p>
    <p><input type="time" name="time" placeholder="Time" required/> 
      <input type="date" name="Date" placeholder=" Date" min="04-march-2018" required/>
      <input type="tel" name="phone" placeholder=" Phone number" required/>
    </p>
    <p style="font-weight:900">Number Of Person:<input type="number" name="quantity" min="1" max="10" required/><br/><br/>
    
    <input type= "submit" name='submit' value="Book Now"/><br/><br/>
</form>
  </body>
  </html>
