<?php 

include "lib/php/functions.php";
include "parts/templates.php";

setDefault('s',''); // search
setDefault('t','products_all'); // type
setDefault('d','DESC'); // order direction
setDefault('o','date_create'); // order by
setDefault('l','20'); // limit



//resetCart();
//pretty_dump(getCart());

$cart=getCartItems();

//pretty_dump($cart);




// pretty_dump(count($cart));


?><!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon" href="images/Baristas_logo_BK.png">
   <title>Product Cart</title>
   
   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>
   <?php include "parts/categorybar.php" ?>


   <div class="container" style="margin-top: 2em;">
      <div class="grid gap">
         <div class="col-xs-12 col-md-8">
            <div class="card flat" style="padding-bottom: 3em;">

               <div class="card-section" style="padding: 0 1em; margin: 0;">
                  <div class="card grid gap" style="padding: 0 1em; margin: 0;">
                     <div class="col-xs-12 col-md-3">
                        <h1>Your Bag </h1>
                     </div>
                     <div class="col-xs-12 col-md-3">
                           
                        <h4 style="margin-top: 1.5em;"><?= count($cart) ?> Items</h4>
                        
                     </div>

                     <div class="col-xs-12 col-md-3">
                        
                     </div>

                     <div class="col-xs-12 col-md-3" style="text-align: right;">
                        <a style = "text-decoration: underline;" href="coffeeproducts.php"><h5 style="margin-top: 2em;">Continue Shopping</h5></a>
                     </div>


                  </div>

               </div>

               <div class="card-section" style="padding: 0;">
                  <?php

                  if(!count($cart)) {
                     echo "<div class='card-section'>No Items In Cart Yet.</div>";
                  }
                  else {
                     echo array_reduce($cart,'makeCartList');
                  }

                  ?>

               </div>
            </div>

         </div>

         <div class="col-xs-12 col-md-4">
            <div class="card light-green soft" style="padding: 0;">

               <div class="card-section" style="border-bottom: none;">
                  <h2>Order Summary</h2>
               </div>
               <?= cartTotals() ?>
               <div class="card-section">
                  <a class="form-button" href="checkout.php">Checkout</a>
               </div>
            </div>
         </div>
      </div>

      <?php

      if (count($cart) != 0){

      ?>


      <h2 style="margin-top: 5em;">You might also like</h2>

      <div class="card grid gap">



      <?php

      $category = [];

      for ($x = 0; $x < count($cart); $x++) {
        $category = $cart[$x]->category;
        $id = $cart[$x]->id;

        $products = MYSQLIQuery("
            SELECT * 
            FROM 
            `products`
            WHERE `category` = '{$category}' AND `id` != '{$id}'


            ORDER BY `date_create`
            LIMIT 2



            ");

         echo array_reduce($products, 'makeProductList');

      }
         ?>

      </div>

   <?php } ?>
   </div>
   
</body>

<?php include "parts/footer.php" ?>


</html>