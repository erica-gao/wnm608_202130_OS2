<?php 

include "lib/php/functions.php";
include "parts/templates.php";

setDefault('s',''); // search
setDefault('t','products_all'); // type
setDefault('d','DESC'); // order direction
setDefault('o','date_create'); // order by
setDefault('l','20'); // limit




?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Checkout</title>

   <?php include "parts/meta.php" ?>

</head>
<body>
   <?php include "parts/navbar.php" ?>
   <?php include "parts/categorybar.php" ?>

   <div class="container" style="margin-top: 2em;">
   	<h1 style="text-align: center;">Thank you for your purchase!</h1>

   	<div class="card light-green soft" style="text-align: center;">
   		<h2>ORDER CONFIRMATION</h2>
   		<p>We have received your order and will contact you as soon as your package is shipped. You can find your purchase information below. </p>	
   	</div>


      <div style="text-align: center;">
         
         <h2>ORDER SUMMARY</h2>

         <div class="card grid gap">
            <div class="col-xs-12 col-md-8">

               <?
               echo array_reduce($cartItems,'makeCondensedCartList');

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




      <div><a href="coffeeproducts.php">Try out these things</a></div>
   </div>


</body>

<?php include "parts/footer.php" ?>
</html>