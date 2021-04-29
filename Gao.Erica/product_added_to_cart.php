<?php 

include "lib/php/functions.php";
include "parts/templates.php";

$cart = MYSQLIQuery("
   SELECT *
   FROM `products`
   WHERE `id` IN (5, 9, 13)
");


?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Added To Cart</title>
   
   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>
   

   <div class="container">
      <div class="card soft">
         <h2>Your Cart</h2>
         <?php

         echo array_reduce($cart,'makeCartList');

         ?>
	      
	    </div>


         <div class="display-flex">
            <div class="flex-none">
               <a class="form-button" href="javascript:window.history.back();">Continue Shopping</a>
            </div>

            <div class="flex-stretch">
            </div>

            <div class="flex-none">
               <a class="form-button" href="shipping.php">Checkout</a>
            </div>


      </div>
   </div>
</body>
</html>