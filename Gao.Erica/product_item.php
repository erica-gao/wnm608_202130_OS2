<!-- This page is not supposed to be navigated to except for from a link created in product_list.php
 -->

<?php

include "lib/php/functions.php";
include "parts/templates.php";
include "data/api.php";

$product = makeStatement("product_by_id")[0];

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
         <div class="image-main">
            <img src="images/store/<?= $product->image_thumb ?>" />
         </div>

         <div class="image-thumbs"><?= $thumb_elements ?></div>
         
      </div>


      <div class="col-xs-12 col-md-4 col-margin">
        <form class="card soft flat" action="product_actions.php?crud=add-to-cart" method="post" style="margin-top: 0;">
          <input type="hidden" name="id" value="<?= $product->id ?>">
          <div class="card-section">
        <div class="product-title"><?= $product->name ?></div>
        <div class="product-price">&dollar;<?= $product->price ?></div>

      </div>


      <?php

      $category = $product->category;

      if($category == 'coffee capsule') {

      ?>
       
        <div class="card-section">

  

            <p><span style="font-weight: 700;">Cup Size: </span><?= $product->cup_size ?></p> 

            <p><span style="font-weight: 700;">Intensity: </span><?= $product->intensity ?></p> 

            <p><span style="font-weight: 700;">Aromatic Profile: </span><?= $product->aromatic ?></p> 

            <p><span style="font-weight: 700;">Origin: </span><?= $product->origin ?></p> 
            
        </div>

        <?php
      }

      ?>

          <div class="card-section">
            <label class="form-label">Amount</label>
            <div class="form-select">
               <select name="amount">
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
            <button type="submit" class="form-button sell">Add To Cart</button>
          </div>
      </div>
      </div>
    </form>

      <div style="margin-top: 2em; margin-bottom: 4em;">


        <div class="card-section">
          <h1>Enjoy more with less</h1>
          <p><?= $product->description ?></p>

        </div>

        <?php

        $category = $product->category;

        if($category == 'coffee machine') {



        ?>

        <div class="card-section">

          <h4 style="color: var(--color-neutral-light);">Product Details</h4>

          <div class="card-section grid gap">

            <div class="col-xs-12 col-md-6">

            <h2>WEIGHT</h2>
            <p><?= $product->Weight ?></p>

            </div>

            <div class="col-xs-12 col-md-6">

            <h2>WARRANTY</h2>
            <p><?= $product->Warranty ?></p>

            </div>
            
          </div>

          <div class="card-section grid gap">

            <div class="col-xs-12 col-md-6">

            <h2>DIMENSION</h2>
            <p><?= $product->Dimension ?></p>

            </div>

            <div class="col-xs-12 col-md-6">

            <h2>REMOVABLE WATER TANK</h2>
            <p><?= $product->water_tank ?></p>

            </div>
            
          </div>

          <div class="card-section grid gap">

            <div class="col-xs-12 col-md-6">

            <h2>PRESSURE</h2>
            <p><?= $product->pressure ?></p>

            </div>

            <div class="col-xs-12 col-md-6">

            <h2>CAPACITY</h2>
            <p><?= $product->capacity ?></p>

            </div>
            
          </div>

      </div>

      <?php

    }


      ?>


      </div>




      <h3>You May Also Like</h3>

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