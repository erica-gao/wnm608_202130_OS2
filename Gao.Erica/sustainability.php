<?php 

include "lib/php/functions.php";
include "parts/templates.php";


?><!DOCTYPE html>
<html lang="en">
<head>

   <?php include "parts/meta.php" ?>

</head>
<body>
   <?php include "parts/navbar.php" ?>
   <?php include "parts/categorybar.php" ?>

   <div class="view-window display-flex flex-align-center flex-justify-center" style="background-image: url(images/sustainability.jpeg);">
      <div class="container flex-none">
         <h5 style="font-style: italic; font-size: 1.3em; color: white;">Sustainable Quality</h5>
         <h1 style="line-height: 1.5em; color: white;">"Because we care about your coffee tasting experience as well as creating greater value for society and the environment."</h1>
      </div>
   </div> 

   <div class="container" style="margin-top: 3em;">

      <div class="grid">
         <div class="col-xs-12 col-md-6">
            <div class="three_item_image_wrap">

            <img src="images/capsule_recycle.jpeg">
         </div>

         </div>

         <div class="col-xs-12 col-md-6" style="background-color: var(--color-neutral-lighter)";>

            <div class="sustainability_intro ">


               <h5 style="font-style: italic; font-size: 1.3em;">Aluminium Recycling</h5>
               <h1 style="line-height: 1.3em; font-weight: 400;">We use aluminium for the capsules to ensure you get the freshest cup of quality coffee every time. It provides the best protection against oxygen, light and humidity, which can really affect taste. </h1>

            </div>

         </div>
      </div>

      <h1 style="text-align: center; margin-top: 3em; font-weight: 300; font-size: 2.3em;">AND it is 100 percent and infinitely recyclable.</h1>

      <h1 style="text-align: center; margin-top: 3em;">Origin Terriors</h1>
      <hr class="origin">

      <p style="text-align: center; margin-top: 3em; width: 40em; margin: 2em auto;">A result of a harmony between soil, climate and location has a profound effect on a coffee’s taste and character. Check out where Baristas grow our coffee and what unique coffe flavors they produce.

      </p>

      <div class="card grid gap">
         <div class="col-xs-12 col-md-3">
            <div class="flex-none image-main">
               <img src="images/farm1.jpeg">
            </div>

            <h4>Columbia</h4>
            <p>Colombia produces fine washed Arabicas that are grown at a very high altitude right on the equator.</p>
            <h5 style="font-style: italic; color: var(--color-main-dark);">Result: fine acidity and lots of fruit notes</h5>


         </div>

         <div class="col-xs-12 col-md-3">
            <div class="flex-none image-main">
               <img src="images/farm2.jpeg">
            </div>

            <h4>Brazil</h4>
            <p>Colombia, for example, produces fine washed Arabicas that are grown at a very high altitude right on the equator. </p>


         </div>

         <div class="col-xs-12 col-md-3">
            <div class="flex-none image-main">
               <img src="images/farm3.jpeg">
            </div>

            <h4>Ethiopia</h4>
            <p>Colombia, for example, produces fine washed Arabicas that are grown at a very high altitude right on the equator. </p>


         </div>

         <div class="col-xs-12 col-md-3">
            <div class="flex-none image-main">
               <img src="images/farm4.jpeg">
            </div>

            <h4>Costa Rica</h4>
            <p>Colombia, for example, produces fine washed Arabicas that are grown at a very high altitude right on the equator. </p>


         </div>
      </div>








   </div>

         





</body>


<?php include "parts/footer.php" ?>

</html>