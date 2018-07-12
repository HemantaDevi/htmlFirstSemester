<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <link rel="shortcut icon" href="delivery.png">
    <title>View your cart</title>
    <style>
    h1{
      text-align: center;
      font-family: playfair display;


  }
  body{
  background-image: url('chef.jpg');
  background-size: cover;
  background-attachment: fixed;
} 

table{
  text-align:  center;
  font-family: "Playfair Display";
  background-color: white;
  color: black;
  font-weight: 550;
}

table, th, td {
    border: 2.5px solid #989898;
      border-collapse: collapse;

}
th, td {
  border-collapse: collapse;
  }

th{
  font-size:20px;
  background-color: #b4b4b4;
  color: black;
}

button {
    position: absolute;
    left: 42.5%;
}


</style>
  </head>
  <body>
    <h1>Checkout</h1>

   
    <table id="table-orders" width="100%" cellpadding="10">
      <tr font-size="24px">
        <th>#</th>
        <th>Menu</th>
        <th>Price (Rs)</th>
        <th>Quantity</th>
        <th>total</th>
        
        <!--<th>Cancel</th>-->
      </tr>
    <?php
      $counter = 1;
      $totalprice = 0;
      $orders = json_decode($_POST['order']);
      foreach($orders as $order) { ?>
        
          <td><?php echo $counter; ?></td>
          <td class='title'><?php echo $order->title ?></td>
          <td class='price' id="price"><?php echo $order->price ?></td>
         
          <td class='quantity' id="quantity"><?php echo $order->quantity ?></td>
          <td class='total'><?php echo ($order->price * $order->quantity); ?></td>
            <!-- Script here -->
          
    
          <!--<td><span id="<?php echo 'cancel-' . $counter++ ?>">X</span></td>-->

        </tr>
    <?php
        $totalprice = $totalprice + ($order->price * $order->quantity);
      }
     ?>
     </table>

      <h3 id="totalprice">Total Price: <?php echo $totalprice ?></h3>
      
      
     <div style="margin-left:40%">
       <br/><br/><a href="mailto:delishonthego@live.com?subject=Command&body=
	  %20Hi,%0D%0A
	  My%20Order%20is:%0D%0A
	  Title%20%09%09%09Quantity%20%09%09%09Unit%20Price%0D%0A
	  <?php foreach($orders as $order) {?>
	  <?php echo $order->title ?>%20%09%09%09
	  <?php echo $order->quantity ?>%20%09%09%09
	  <?php echo $order->price ?>%0D%0A
	  <?php }echo "Total%20is%20 $totalprice" ?>%0D%0A
	  'Enter%20your%20address%20here:'%0D%0A
	  " id="btn-confirm-order" 
	  
	  style= "color: black;
    font-size: 17px;
    font-weight: 700;
    outline: none;
    text-transform: capitalize;
    padding: .5em 2.5em .5em 1em; 
    border: 3px solid black;
	text-decoration:none;
    margin: .35em 0 0;
    font-family: playfair display;
    background-color: #989898; text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Confirm Order</a>
     </div>

     <script>
       let order_array = [];

       window.onload = function() {
         // Confirm Button
         document.querySelector('#btn-confirm-order').addEventListener('click', function(e){
          // Select all tr
          let tr = document.querySelectorAll("#table-orders tr");

          for (let i = 1; i < tr.length; i++) {
            // get id of the current tr
            let tr_id = tr[i].id;

            let obj = {};
            obj.title = document.querySelector('#' + tr_id + " td.title").innerText;
            obj.price = document.querySelector('#' + tr_id + " td.price").innerText;
            obj.quantity = document.querySelector('#' + tr_id + " td.quantity").innerText;
            obj.total = document.querySelector('#' + tr_id + " td.total").innerText;
            obj.address = document.querySelector("#address").value; //put in div id=address
            obj.totalprice = document.querySelector('#')

            // Add obj to order_array
            order_array.push(obj);
          }

          // Send order_array to check page
          document.querySelector('#orders').value = JSON.stringify(order_array);
          document.querySelector('#submit-form').submit();
         });

         // Cancel order
         let cancel_buttons = document.querySelectorAll('td span');
         for (let i = 0; i < cancel_buttons.length; i++) {
           cancel_buttons[i].addEventListener('click', function(e){
             // get the id of what should be removed
             let delete_id = e.target.id;

             // split id to get required info
             let delete_menu_id = delete_id.split('-')[1];

             // Delete menu from DOM
             let menu_to_delete = document.querySelector('#order' + delete_menu_id);
             menu_to_delete.parentNode.removeChild(menu_to_delete);
           })
         }
       }
     </script>
  </body>
</html>
