<!DOCTYPE html>
<html lang="en">
<head>
   <title>Cart</title>

   <?php include "parts/meta.php" ?>

</head>
<body>
   <?php include "parts/navbar.php" ?>



   <div class="container" style="margin-top: 1.5em;">

      <div class="grid gap">
         <div class="col-xs-12 col-md-6">
            <h1>Your Bag</h1>
         </div>

         <div class="col-xs-12 col-md-6">
            <a href="index.php"><p style="color: var(--color-neutral-medium);">Continue Shopping</p></a>
         </div>


      </div>

     <div class="grid gap">
      <div class="col-xs-12 col-md-8 col-margin">
         <div class="grid gap">
           <div class="col-xs-12 col-sm-3">
              <div class="shopping_cart_image_wrap" style="background-image: url(images/capsule.jpg);"></div>
           </div>
           <div class="col-xs-12 col-sm-3">
               <h3 style="margin-bottom: 1.5em;">Product Name</h3>
               <h5 style="color: var(--color-neutral-medium);">Cup Size: <span style="color: var(--color-black);">50 Capsules OL</span></h5>
               <h5 style="color: var(--color-neutral-medium);">Flavors: <span style="color: var(--color-black);">Chocolate</span></h5>
           </div>
           <div class="col-xs-12 col-sm-3">
              <select class="select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  
               </select>
           </div>
           <div class="col-xs-12 col-sm-3">
              <p style="margin-left: 2em; text-align: center;">$35</p>
           </div>
       </div>
         </div>

      <div class="col-xs-12 col-md-4 col-margin card soft">
         <h2>Order Summary</h2>
         <p>Items: 2</p>
         <P>Shipping</P>
      </div>
 
    </div>

    <div class="grid gap">
      <div class="col-xs-12 col-md-6">
         <a href="shipping.php" class="btn btn-checkout btn-lg">Checkout</a>

      </div>
    </div>
 </div>
    

   
</body>

<?php include "parts/footer.php" ?>
</html>