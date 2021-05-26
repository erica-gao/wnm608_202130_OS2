<?php 

include "lib/php/functions.php";
include "parts/templates.php";

setDefault('s',''); // search
setDefault('t','products_all'); // type
setDefault('d','DESC'); // order direction
setDefault('o','date_create'); // order by
setDefault('l','20'); // limit

$cart = getCartItems();



?><!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon" href="images/Baristas_logo_BK.png">
   <title>Checkout</title>

   <?php include "parts/meta.php" ?>

</head>
<body>
   <?php include "parts/navbar.php" ?>
   <?php include "parts/categorybar.php" ?>

   <div class="container" style="margin-top: 2em;">
   	<h1 style="text-align: center;">Thank you for your purchase!</h1>

   	<div class="card light-green soft" style="text-align: center; margin-top: 2em;">
   		<h4>ORDER CONFIRMATION</h4>
   		<p>We have received your order and will contact you as soon as your package is shipped. You can find your purchase information below. </p>	
   	</div>


      <div style="text-align: center; margin-top: 2em;">
         
         <h4>ORDER SUMMARY</h4>

         <div class="card grid gap">
            <div class="col-xs-12 col-md-8 display-flex">

               <?
               echo array_reduce($cart,'makeCondensedCartList');

               ?>
            </div>

            <div class="col-xs-12 col-md-4">

               <?

               echo cartTotals();

               ?>

               <!-- <div class="card-section display-flex">
                  <div class="flex-stretch">
                     Product Name
                  </div>
                  <div class="flex-none"><?= $cart->name?></div>
               </div>

               <div class="card-section display-flex">
                  <div class="flex-stretch">
                     Sub Total
                  </div>
                  <div class="flex-none">&dollar;$pricefixed</div>
               </div> -->
            </div>
            
         </div>
      </div>




      <div style="text-align: center; margin-top: 3em;"><a href="coffeeproducts.php"><h4>You May Also Like</h4></a></div>


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
   </div>


   </div>

   <?php

   resetCart();


   ?>


</body>

<?php include "parts/footer.php" ?>
</html>