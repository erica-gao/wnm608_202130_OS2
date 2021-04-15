<!-- This page is not supposed to be navigated to except for from a link created in product_list.php
 -->




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
      <div class="col-xs-12 col-md-8 col-margin">
         <div class="image_wrap" style="background-image: url(images/capsule.jpg);"></div>
      </div>

      <div class="col-xs-12 col-md-4 col-margin">
        <div class="product_desc"><h2>Product Name</h2></div>
        <div class="product_desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure praesentium similique molestias tenetur perferendis alias.</p></div>
        <h5>Cup Size</h5>
        <div class="form-select">
            <select>
               <option value="20">20 Capsules OL</option>
               <option value="50">50 Capsules Ol</option>
               <option value="100">100 Capsules OL</option>
            </select>
        </div>
        <div><a href="product_added_to_cart.php">Add To Cart</a></div>
      </div>
      </div>

      <div style="margin-top: 2em; margin-bottom: 4em;">
        <h3>Details</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus omnis dolorem fuga non, vel aliquam quas eos tempora accusamus libero repudiandae itaque, eligendi, placeat nesciunt nemo cum, ipsa temporibus aperiam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus omnis dolorem fuga non, vel aliquam quas eos tempora accusamus libero repudiandae itaque, eligendi, placeat nesciunt nemo cum, ipsa temporibus aperiam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus omnis dolorem fuga non, vel aliquam quas eos tempora accusamus libero repudiandae itaque, eligendi, placeat nesciunt nemo cum, ipsa temporibus aperiam.</p>

      </div>

      <?php include "parts/similarproducts.php" ?>
  
  
 
    </div>
    


  
</body>
<?php include "parts/footer.php" ?>
</html>