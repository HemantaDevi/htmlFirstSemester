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

$email = $_POST['email'];
$pwd = $_POST['password'];

$query = "SELECT * FROM login WHERE email='$email' AND password='$pwd'";
$user = mysqli_query($conn, $query);

if (mysqli_num_rows($user) > 0) {
	$_SESSION['email'] = $email;
	header("Location: web/rosemenu.php");
}
else
{
	header("location: index.php");
}



?>
