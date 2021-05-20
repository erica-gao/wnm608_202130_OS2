<?php 

include "lib/php/functions.php";
include "parts/templates.php";

setDefault('s',''); // search
setDefault('t','products_all'); // type
setDefault('d','DESC'); // order direction
setDefault('o','date_create'); // order by
setDefault('l','20'); // limit


// pretty_dump($_POST);

$product = MYSQLIQuery("SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];
$cart_product = cartItemById($product->id);



// addToCart($_POST['id']*1, $_POST['amount']*1);



// Cast a string to number


?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Added To Cart</title>
   
   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>
   <?php include "parts/categorybar.php" ?>
   

   <div class="container">

         <?php

         if(!isset($_GET['id'])) {

            echo "something is wrong";

         } else {
         ?>

         <h2 style="margin-top: 3em; margin-bottom: 2em;">The following items have been added to your cart:</h2>

         <div class="card soft flat">

            <div class="card-section" style="padding: 0 1em; margin: 0;">
               <div class="card grid gap" style="padding: 0 1em; margin: 0;">
                  <div class="col-xs-12 col-md-3">
                     <h4>Item</h4>
                  </div>
                  <div class="col-xs-12 col-md-3">
                     <h4>Name</h4>
                  </div>

                  <div class="col-xs-12 col-md-3">
                     <h4>Description</h4>
                  </div>

      

                  <div class="col-xs-12 col-md-3">
                     <h4>Price</h4>
                  </div>


               </div>

            </div>

            <div class="card-section" style="padding: 0;">
               <?php
             $product = MYSQLIQuery("SELECT * FROM `products` WHERE `id`=".$_GET['id']);

            echo array_reduce($product, 'makeaddedtoCartList');
            ?>

            </div>

          </div>

          <div class="display-flex">
            <div class="flex-none">
               <a class="form-button" href="javascript:window.history.back();">Continue Shopping</a>
            </div>

            <div class="flex-stretch">
            </div>

            <div class="flex-none">
               <a class="form-button" href="cart.php">Checkout</a>
            </div>

         </div>
   </div>


   <div class="container" style="margin-top: 8em;">
      <h3>You May Also Like</h3>

      <div class="card-section grid gap">



         <?php

         $product = MYSQLIQuery("SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

         $category = $product->category;
         $id = $product->id;



         $products = MYSQLIQuery("
            SELECT * 
            FROM 
            `products`
            WHERE `category` = '{$category}' AND `id` != '{$id}'


            ORDER BY `date_create`
            LIMIT 5



            ");

            echo array_reduce($products, 'makeProductList');
         }
         ?>
      </div>
   </div>
</body>

<?php include "parts/footer.php" ?>
</html>