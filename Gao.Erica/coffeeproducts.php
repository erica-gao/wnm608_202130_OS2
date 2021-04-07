<!DOCTYPE html>
<html lang="en">
<head>
   <title>Coffee Products</title>

   <?php include "parts/meta.php" ?>

</head>
<body>
   <?php include "parts/navbar.php" ?>
   <?php include "parts/categorybar.php" ?>

   <div class="container display-flex-space" style="margin-top: 2em;">
      <h2>35 Coffees</h2>
      <button type="button" class="btn btn-filter btn-sm">Filter</button>

   </div>

   <div class="container" style="margin-bottom: 2em;">
      <h3>International Selections</h3>

      <article class="article card soft light-green">

         <?php include "parts/three_item_product_list.php" ?>
         <?php include "parts/three_item_product_list.php" ?>
      
         
      </article>
      
   </div>


   <div class="container">
      <h3>Capsule Assortment</h3>

      <article class="article card soft">

         <?php include "parts/three_item_product_list.php" ?>
         <?php include "parts/three_item_product_list.php" ?>
      
         
      </article>
      
   </div>



   
</body>

<?php include "parts/footer.php" ?>
</html>