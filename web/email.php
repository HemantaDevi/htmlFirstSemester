<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $orders = json_decode($_POST['orders']);
      print_r($orders);
     ?>
  </body>
</html>
