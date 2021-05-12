<?php 

include "lib/php/functions.php";
include "parts/templates.php";

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

         <h2 style="margin-top: 3em;">The following items have been added to your cart:</h2>

         <div class="card flat" style="padding-top: 0.2em;">


             <?php
             $product = MYSQLIQuery("SELECT * FROM `products` WHERE `id`=".$_GET['id']);

            echo array_reduce($product, 'makeaddedtoCartList');
            ?>
          </div>

          <div class="display-flex">
            <div class="flex-none" style="margin-left: 2em;">
               <a class="form-button" href="javascript:window.history.back();">Continue Shopping</a>
            </div>

            <div class="flex-stretch">
            </div>

            <div class="flex-none">
               <a class="form-button" href="cart.php">Checkout</a>
            </div>

         </div>
   </div>


   <div class="container" style="margin-top: 3em;">
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