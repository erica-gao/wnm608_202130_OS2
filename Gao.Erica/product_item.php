<!-- This page is not supposed to be navigated to except for from a link created in product_list.php
 -->

<?php

include "lib/php/functions.php";
include "parts/templates.php";
include "data/api.php";

setDefault('s',''); // search
setDefault('t','products_all'); // type
setDefault('d','DESC'); // order direction
setDefault('o','date_create'); // order by
setDefault('l','20'); // limit


$product = makeStatement("product_by_id")[0];

$thumbs = explode(",", $product->image_thumb);

$thumb_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='images/store/$o'>";
});


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Baristas</title>

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
    	<a href="#" onclick="history.back();return false;"><h3>Back</h3></a>
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

      if($category == 'capsule') {

      ?>
       
        <div class="card-section">

  

            <p style="font-size: 0.9em;"><span style="font-weight: 700; color: var(--color-sub-dark);">Cup Size: </span><?= $product->cup_size ?></p> 

            <p style="font-size: 0.9em;"><span style="font-weight: 700; color: var(--color-sub-dark);">Intensity: </span><?= $product->intensity ?></p> 

            <p style="font-size: 0.9em;"><span style="font-weight: 700; color: var(--color-sub-dark);">Aromatic Profile: </span><?= $product->aromatic ?></p> 

            <p style="font-size: 0.9em;"><span style="font-weight: 700; color: var(--color-sub-dark);">Origin: </span><?= $product->origin ?></p> 
            
        </div>

        <?php
      }

      if(($category == 'machine') or ($category == 'condiments')){

      ?>

      <div class="card-section">

        <strong style="color: var(--color-sub-dark);">Description</strong>

        <p><?= $product->description ?></p>
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

        <?php

        $category = $product->category;

        if($category == 'machine') {

        ?>

        <div class="card-section">
          <h1 style="font-weight: 400; color: var(--color-sub-dark); text-transform: uppercase;"><?= $product->intro ?></h1>

        </div>

  
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

          <?php

    }


        if($category == 'capsule') {

        ?>


        <div class="card-section">
          <h1><?= $product->intro ?></h1>
          <p style="line-height: 1.5em; margin-bottom: 2em;"><?= $product->description ?></p>

        </div>

        <div class="card-section">
          <h4>ORIGIN STORY</h4>
          <p style="line-height: 1.5em; color: var(--color-neutral-medium);"><?= $product->origin_description ?></p>

        </div>

        <div class="card-section">
          <h4>MORE ABOUT ROASTING</h4>
          <p style="line-height: 1.5em; color: var(--color-neutral-medium);"><?= $product->roasting_info ?></p>

        </div>

        <div class="card-section">
          <h4>AROMATIC PROFILE</h4>
          <p style="line-height: 1.5em; color: var(--color-neutral-medium);"><?= $product->aromatic_profile ?></p>

        </div>




<?php

    }

    if ($category == 'accessories') {
      ?>

      <div class="card-section">
          <h1><?= $product->intro ?></h1>
          <p style="line-height: 1.5em; margin-bottom: 2em;"><?= $product->description ?></p>

        </div>

        <?php


    }

      ?>

      </div>

      


      <div class="container">




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

  </div>
    


  
</body>
<?php include "parts/footer.php" ?>
</html>