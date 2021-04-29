<!-- This page is not supposed to be navigated to except for from a link created in product_list.php
 -->

<?php

include "lib/php/functions.php";
include "parts/templates.php";

$product = MYSQLIQuery("
   SELECT *
   FROM `products`
   WHERE `id` = {$_GET['id']}
")[0];

$thumbs = explode(",", $product->image_thumb);

$thumb_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='images/store/$o'>";
});

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Capsule</title>

   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>
   <?php include "parts/categorybar.php" ?>

   <div class="container display-flex" style="margin-top: 2em;">

   	<div class="icon_size">
   		<img src="images/icon/leftarrow.png">
   	</div>
   	
    <a href="coffeeproducts.php">
    	<h3>Back to all coffee</h3>
 	  </a>

   </div>

   <div class="container" style="margin-top: 1.5em;">

     <div class="grid gap">
      <div class="col-xs-12 col-md-7 col-margin">

        <div class="card soft">
               <div class="image-main">
                  <img src="images/store/<?= $product->image_thumb ?>" />
               </div>

               <div class="image-thumbs"><?= $thumb_elements ?></div>
            </div>
         
      </div>


      <div class="col-xs-12 col-md-4 col-margin">
        <div class="product-title"><?= $product->name ?></div>
        <div class="product-price">&dollar;<?= $product->price ?></div>
       
        <div class="card-section">
            <label class="form-label">Cup Size</label>
            <div class="form-select">
               <select>
                  <!-- option[value='$']*10>{$} -->
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
               </select>
            </div>
          </div>
          <div class="card-section">
            <a href="product_added_to_cart.php" class="form-button sell">Add To Cart</a>
          </div>
      </div>
      </div>

      <div style="margin-top: 2em; margin-bottom: 4em;">
        <h3>Details</h3>
        <p><?= $product->description ?></p>

      </div>


      <h3>Similar Products</h3>

      <div class="card grid gap">



      <?php

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
         ?>


       </div>


         
  
  
 
    </div>
    


  
</body>
<?php include "parts/footer.php" ?>
</html>