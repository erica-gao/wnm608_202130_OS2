 <?php 

include "lib/php/functions.php";
include "parts/templates.php";
include "data/api.php";

setDefault('s',''); // search
setDefault('t','products_all'); // type
setDefault('d','DESC'); // order direction
setDefault('o','date_create'); // order by
setDefault('l','20'); // limit


?><!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon" href="images/Baristas_logo_BK.png">

   <title>Baristas</title>

   

   <?php include "parts/meta.php" ?>

</head>
<body>
   <?php include "parts/navbar.php" ?>
   <?php include "parts/categorybar.php" ?>
   <?php include "parts/view_window.php" ?>
   <?php include "parts/aboutus.php" ?>
   <?php include "parts/two_cards_flex.php" ?>

   <div class="container" style="margin-top: 5em;margin-bottom: 8em;">
		<div class="card flat" style="padding-top: 3em;">
				<h2 style="text-align: center;">Our Purpose</h2>
            <h3 style="text-align: center;">Personalized Coffee Experience</h3>

         <div class="card transparent" style="margin-top: 2em;">
            <div class="grid gap">

               <div class="col-xs-12 col-md-6 col-margin">
                  <div class="two_item_image_wrap" style="background-image: url(images/aboutus.jpeg);"></div>
               </div>

               <div class="col-xs-12 col-md-6 col-margin">
                     <h1>Origins and Blends</h1>
                     <h3 style="line-height: 1.6em; font-weight: 400; color: black; margin-top: 2em;">From Pure Origins to Blends, we have suppliers from all over the world so you can discover the countless uncompromising choices that go into every cup.</h3>
                  
               </div>

            

            </div>
         </div>

         <div class="card transparent">


            <div class="grid gap">

               <div class="col-xs-12 col-md-6 col-margin" style="margin-top: 3em;">
                  <h1>Sustainable Quality</h1>
                  <h3 style="line-height: 1.6em; font-weight: 400; color: black; margin-top: 2em;">We care about your coffee tasting experience as well as creating greater value for society and the environment.</h3>
                  <a href="sustainability.php" style="text-decoration: underline; color: var(--color-sub-dark); margin-top: 2em;">Learn more about our sustainability.</a>
               </div>

               <div class="col-xs-12 col-md-6 col-margin">
                  <div class="two_item_image_wrap" style="background-image: url(images/sustainability_index.jpeg);"></div>
               </div>

            
            </div>
         </div>

         <div class="card transparent">
         

            <div class="grid gap">

               <div class="col-xs-12 col-md-6 col-margin">
                  <div class="two_item_image_wrap" style="background-image: url(images/tasting.jpeg);"></div>
               </div>

               <div class="col-xs-12 col-md-6 col-margin">
                     <h1>Tasting Experience</h1>
                     <h3 style="line-height: 1.6em; font-weight: 400; color: black; margin-top: 2em;">From cherries we pick to the coffee you drink, we are commited to convey our expertise and passion every step of the way.</h3>
                     <a href="tasting.php" style="text-decoration: underline; color: var(--color-sub-dark); margin-top: 2em;">Learn more about the Art of Coffee Tasting.</a>

               </div>

            
            </div>
         </div>




      </div>


	</div>
   


</body>


<?php include "parts/footer.php" ?>

</html>