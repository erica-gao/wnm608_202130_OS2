<!DOCTYPE html>
<html lang="en">
<head>
   <title>Added To Cart</title>
   
   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>
   

   <div class="container">
      <div class="card soft">
         <h2>The following items has been added to your cart</h2>
         <?php include "parts/three_item_product_list.php" ?>

         <div class="grid gap">
	      <div class="col-xs-12 col-md-6">
	         <a href="shipping.php" class="btn btn-checkout btn-lg">Checkout</a>

	      </div>
	    </div>







         <div><a href="coffeeproducts.php">Back To Shopping</a></div>
      </div>
   </div>
</body>
</html>