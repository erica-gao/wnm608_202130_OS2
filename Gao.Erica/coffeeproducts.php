<?php 

include "lib/php/functions.php";
include "parts/templates.php";


?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Coffee Products</title>

   <?php include "parts/meta.php" ?>

</head>
<body>
   <?php include "parts/navbar.php" ?>
   <?php include "parts/categorybar.php" ?>

   <div class="container display-flex-space" style="margin-top: 2em;">
      <h2>Products List</h2>
      <button type="button" class="btn btn-filter btn-sm">Filter</button>

   </div>

   <div class="container" style="margin-bottom: 2em;">
      <h3>Capsule Assortment</h3>


      <div class="grid gap product-list">

         <?php

         $products = MYSQLIQuery("
            SELECT * 
            FROM 
            `products`
            WHERE `category` = 'coffee capsule'
            ORDER BY `date_create`
            LIMIT 5

            ");

         echo array_reduce($products, 'makeProductList');
         ?>
      </div>
      
   </div>

   <div class="container" style="margin-bottom: 2em;">
      <h3>Coffee Machines</h3>


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

   <div class="container" style="margin-bottom: 2em;">
      <h3>Accessories</h3>


      <div class="grid gap product-list">

         <?php

         $products = MYSQLIQuery("
            SELECT * 
            FROM 
            `products`
            WHERE `category` = 'coffee cups pack of 2' OR `category` = 'milk frother' OR `category` = 'mug' OR `category` = 'coffee maintenance'
            ORDER BY `date_create`
            LIMIT 6

            ");

         echo array_reduce($products, 'makeProductList');
         ?>
      </div>
      
   </div>


   <div class="container" style="margin-bottom: 2em;">
      <h3>Condiments</h3>


      <div class="grid gap product-list">

         <?php

         $products = MYSQLIQuery("
            SELECT * 
            FROM 
            `products`
            WHERE `category` = 'condiments'
            ORDER BY `date_create`
            LIMIT 6

            ");

         echo array_reduce($products, 'makeProductList');
         ?>
      </div>
      
   </div>





   
</body>

<?php include "parts/footer.php" ?>
</html>