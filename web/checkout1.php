<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>View your cart</title>
  </head>
  <body>
    <h1>Checkout</h1>

    <table id="table-orders" border="1" width="100%">
      <tr>
        <th>#</th>
        <th>Menu</th>
        <th>Price (Rs)</th>
        <th>Quantity</th>
        <th>Cancel</th>
      </tr>
    <?php
      $counter = 1;
      $orders = json_decode($_POST['order']);
      foreach($orders as $order) { ?>
        <tr id="<?php echo 'order' . $counter ?>">
          <td><?php echo $counter; ?></td>
          <td class='title'><?php echo $order->title ?></td>
          <td class='price'><?php echo $order->price ?></td>
          <td class='quantity'><?php echo $order->quantity ?></td>
          <td><span id="<?php echo 'cancel-' . $counter++ ?>">x</span></td>
        </tr>
         <tr><td>Total</td></tr>
    <?php
      }
     ?>
     <table>

     <button type="button" id="btn-confirm-order">Confirm Order</button>
     <form action="email.php" method="post" id='submit-form'>
       <input type="hidden" name="orders" id='orders'>
     </form>

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
