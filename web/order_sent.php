<!DOCTYPE html>
<html>

<body>
	<h1>Order Confirmed</h1>
	<?php 
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
	$orders = json_decode($_POST['order']);
  foreach($orders as $order) {

  $addQuery = "INSERT INTO menu VALUES ('$orderid', '$firstname', '$lastname', '$menu', '$quatity', '$total_price', '$address')";
  $sql = mysqli_query($conn, $addQuery);
  }
  mysqli_close($conn);

?>
</body>
</html>