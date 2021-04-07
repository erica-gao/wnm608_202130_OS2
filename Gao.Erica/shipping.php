<!DOCTYPE html>
<html lang="en">
<head>
   <title>Checkout</title>

   <?php include "parts/meta.php" ?>

</head>
<body>
   <?php include "parts/navbar.php" ?>

   <div class="container" style="margin-top: 2em; margin-bottom: 4em;">
   	<h2>Shipping Information</h2>
   	<div class="grid gap" style="margin-bottom: 1em;">
       <div class="col-xs-12 col-md-6">
       	<label for="inputAddress" class="form-label">First Name</label>
         <input type="text" class="form-input" placeholder="First name">
       </div>
       <div class="col-xs-12 col-md-6">
       	<label for="inputAddress" class="form-label">Last Name</label>
         <input type="text" class="form-input" placeholder="Last name">
       </div>
     </div>

     <div class="grid gap">
       <div class="col-xs-12 col-md-12">
         <label for="inputAddress" class="form-label">Address</label>
         <input type="text" class="form-input" id="inputAddress" placeholder="1234 Main St">
       </div>
       <div class="col-xs-12 col-md-12">
         <label for="inputAddress" class="form-label">Apartment/Suite</label>
         <input type="text" class="form-input" id="inputAddress" placeholder="Apt 123">
       </div>

       <div class="col-xs-12 col-md-6">
           <label for="zipCode" class="form-label">Zip Code</label>
           <input type="text" class="form-input" placeholder="Zip Code">
       </div>
       <div class="col-xs-12 col-md-6">
           <label for="city" class="form-label">City</label>
           <input type="text" class="form-input" placeholder="City">
       </div>
       <div class="col-xs-12 col-md-6">
           <label for="state" class="form-label">State/Province</label>
           <input type="text" class="form-input" placeholder="State/Province">
       </div>
       <div class="col-xs-12 col-md-6">
           <label for="country" class="form-label">Country</label>
           <input type="text" class="form-input" placeholder="Country">
       </div>

       <div class="col-xs-12 col-md-12">
         <label for="phoneNumber" class="form-label">Phone Number</label>
         <input type="text" class="form-input" id="phoneNumber" placeholder="12345678">
       </div>
     </div>

   </div>

   <div class="container">
   	<h3>Select a Payment Method</h3>
   	<div class="grid gap">
   		<div class="col-xs-12 col-md-3">
   			<div class="shipping_image_wrap" style="background-image: url(images/visa.jpeg);"></div>
   		</div>

   		<div class="col-xs-12 col-md-3">
   			<div class="shipping_image_wrap" style="background-image: url(images/mastercard.jpeg);"></div>
   		</div>

   		<div class="col-xs-12 col-md-3">
   			<div class="shipping_image_wrap" style="background-image: url(images/discover.jpeg);"></div>
   		</div>

   		<div class="col-xs-12 col-md-3">
   			<div class="shipping_image_wrap" style="background-image: url(images/unionpay.jpeg);"></div>
   		</div>
   	</div>

   	<h4>Credit Card Details</h4>
   	<div class="form-control">
        <label for="example5" class="form-label">Card Number</label>
        <input id="example5" type="Number" class="form-input-lined">
     </div>

     <div class="grid gap">
     	<div class="col-xs-12 col-md-4">
     		<div class="form-control">
              <label for="example5" class="form-label">EXP Month</label>
              <input id="example5" type="Number" class="form-input-lined">
            </div>
     	</div>

     	<div class="col-xs-12 col-md-4">
     		<div class="form-control">
              <label for="example5" class="form-label">EXP Year</label>
              <input id="example5" type="Number" class="form-input-lined">
            </div>
     	</div>

     	<div class="col-xs-12 col-md-4">
     		<div class="form-control">
              <label for="example5" class="form-label">Security Code</label>
              <input id="example5" type="Number" class="form-input-lined">
            </div>
     	</div>
     </div>


     <div class="col-xs-12 col-md-12" style="margin: 4em auto;">
         <a href="confirmation.php" class="btn btn-checkout btn-lg">Proceed to Secure Payment</a>

      </div>
   </div>


</body>

<?php include "parts/footer.php" ?>
</html>