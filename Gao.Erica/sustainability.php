<?php 

include "lib/php/functions.php";
include "parts/templates.php";

setDefault('s',''); // search
setDefault('t','products_all'); // type
setDefault('d','DESC'); // order direction
setDefault('o','date_create'); // order by
setDefault('l','20'); // limit



?><!DOCTYPE html>
<html lang="en">
<head>


   <?php include "parts/meta.php" ?>
   <link rel="icon" href="images/Baristas_logo_BK.png">
   <title>Baristas Sustainability</title>

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

      <p style="text-align: center; margin-top: 3em; width: 40em; margin: 2em auto;">A result of a harmony between soil, climate and location has a profound effect on a coffee’s taste and character. Check out where Baristas grow our coffee and what unique coffee flavors they produce.

      </p>

      <div class="card light-green grid gap">
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
            <p>Plantations are mainly located in Minas Gerais, where the environment provides ideal growing conditions.</p>
            <h5 style="font-style: italic; color: var(--color-main-dark);">Result: pleasant bittersweet chocolate and caramel taste</h5>



         </div>

         <div class="col-xs-12 col-md-3">
            <div class="flex-none image-main">
               <img src="images/farm3.jpeg">
            </div>

            <h4>Ethiopia</h4>
            <p>Foffee beans are grown in either the Harar, Yirgacheffe or Limu regions and are kept apart in the market.</p>
            <h5 style="font-style: italic; color: var(--color-main-dark);">Result: inimitable and delicate flavor</h5>


         </div>

         <div class="col-xs-12 col-md-3">
            <div class="flex-none image-main">
               <img src="images/farm4.jpeg">
            </div>

            <h4>Costa Rica</h4>
            <p>Coffee production began in the Meseta Central which had ideal soil and climate conditions for coffee plantations. </p>
            <h5 style="font-style: italic; color: var(--color-main-dark);">Result: lively acidity, rich sweetness, and smooth aromatic flavors</h5>


         </div>
      </div>

      
   </div>

   <div class="view-window display-flex flex-align-center flex-justify-center" style="background-image: url(images/coffee-beans.jpeg); margin-top: 5em;">
         <div class="container flex-none">
            <h5 style="font-style: italic; font-size: 1.3em; color: white;">Sustainable Quality</h5>
            <h1 style="line-height: 1.5em; color: white;">Follow our journey to world's premium coffee making</h1>

            <div style="text-align: center; margin-top: 2em;">
            <a href="coffeeproducts.php" class="btn btn-checkout btn-lg" style="text-align: center;">Go to Product Lists</a>
         </div>
         </div>
      </div> 
         


</body>


<footer class="footer" style="margin-top: 0;">
   <div class="container">
      <div class="grid gap">

         <div class="col-xs-12 col-md-4">
            <h5>Home</h5>
            <h5>Coffee</h5>
            <h5>Machine</h5>
            <h5>Accessories</h5>
         </div>

         <div class="col-xs-12 col-md-4">
            <h5>About Us</h5>
            
         </div>

         <div class="col-xs-12 col-md-4">
            <h5>Customer Service</h5>
            <h5>Contact Us</h5>
            <h5>FAQ</h5>
            <h5>Career</h5>
            
         </div>
      
      </div>

      <div class="grid gap">
         <div class="col-xs-12 col-md-6">
            <h2>Baristas</h2>
         </div>

         <div class="col-xs-12 col-md-6">
            <h5>Design by Erica Gao &copy; 2021 </h5>
         </div>
      </div>
   </div>

   
   

</footer>

</html>