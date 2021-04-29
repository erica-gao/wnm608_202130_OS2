<?php 

include "lib/php/functions.php";
include "parts/templates.php";


?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Baristas</title>

   

   <?php include "parts/meta.php" ?>

</head>
<body>
   <?php include "parts/navbar.php" ?>
   <?php include "parts/categorybar.php" ?>
   <?php include "parts/view_window.php" ?>
   <?php include "parts/card_soft.php" ?>
   <?php include "parts/two_cards_flex.php" ?>

   <div class="container">
		<div class="card soft">
			<div class="display-flex flex-justify-center">
				<h2>Find the right brewer for you</h2>
			</div>
         
         <div class="grid gap product-list">

         <?php

         $products = MYSQLIQuery("
            SELECT * 
            FROM 
            `products`
            WHERE `category` = 'coffee machine'
            ORDER BY `date_create`
            LIMIT 5

            ");

         echo array_reduce($products, 'makeProductList');
         ?>
      </div>

         


		</div>
	</div>
   


</body>


<?php include "parts/footer.php" ?>

</html>