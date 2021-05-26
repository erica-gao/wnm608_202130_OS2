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
   <title>Coffee Tasting</title>

</head>
<body>
   <?php include "parts/navbar.php" ?>
   <?php include "parts/categorybar.php" ?>

   <div class="view-window display-flex flex-align-center flex-justify-center" style="background-image: url(images/coffeetasting.png);">
      <div class="container flex-none">
         <h5 style="font-size: 2.5em; color: white; font-weight: 400;">The Art of Coffee Tasting</h5>
         
      </div>
   </div> 


<div class="container" style="margin-top: 3em;">
      <article class="card light-green flat" style="margin-bottom: 3em;">
         <div class="container display-flex flex-justify-center">
            <h2>Try our techniques to evaluate coffee like an expert</h2>
         </div>
         <div class="article-body" style="margin: 0 2em;">
            <p style="font-size: 1em; text-align: center; color: var(--color-neutral-dark);line-height: 1.3em;">Tasting is a vital part of making coffee exceptional: the crema, body, smoothness and aroma intensity. A standard coffee cupping procedure involves deeply sniffing the coffee, then slurping the coffee from a spoon so it is aerated. It’s both science and art, but you don’t need decades of experience to become a pro at distinguishing good from bad. Here we show you three tips that can come handy when tasting the cup of coffee that you just brewed with Baristas.</p>
         </div>
      </article>
</div>





<div class="container" style="margin-top: 5em;margin-bottom: 8em;">
      <div class="card flat" style="padding-top: 3em;">
            <h1 style="text-align: center; font-size: 2em; font-weight: 300;">Coffee tasting is both science and art</h1>

         <div class="card transparent" style="margin-top: 2em;">
            <div class="grid gap">

               <div class="col-xs-12 col-md-6 col-margin">
                  <div class="two_item_image_wrap" style="background-image: url(images/tasting1.jpeg);"></div>
               </div>

               <div class="col-xs-12 col-md-6 col-margin">
                     <h1>01. Study the Crema</h1>
                     <h3 style="line-height: 1.6em; font-weight: 400; color: black; margin-top: 2em;">The bubbles should be small and numerous, making a fine, dense crema. If the bubbles are large, it indicates that the coffee has been brewed too quickly. If bubbles are dense, the coffee has probably been brewed too slowly. </h3>
                     
               </div>

            

            </div>
         </div>

         <div class="card transparent">


            <div class="grid gap">

               <div class="col-xs-12 col-md-6 col-margin" style="margin-top: 3em;">
                  <h1>02. Inhale Deeply</h1>
                  <h3 style="line-height: 1.6em; font-weight: 400; color: black; margin-top: 2em;">Sniff the aromas released above the cup.Note the fragrances, then stir your coffee gently and sniff again. Breathe in deeply for a few seconds so that the aromatics reach your nasal cavity. </h3>
               
               </div>

               <div class="col-xs-12 col-md-6 col-margin">
                  <div class="two_item_image_wrap" style="background-image: url(images/tasting2.jpeg);"></div>
               </div>

            
            </div>
         </div>

         <div class="card transparent">
         

            <div class="grid gap">

               <div class="col-xs-12 col-md-6 col-margin">
                  <div class="two_item_image_wrap" style="background-image: url(images/tasting3.jpeg);"></div>
               </div>

               <div class="col-xs-12 col-md-6 col-margin">
                     <h1>03. Evaluate the Taste</h1>
                     <h3 style="line-height: 1.6em; font-weight: 400; color: black; margin-top: 2em;">Take a big spoonful of coffee and really slurp it. Consider everything from the coffee’s texture and flavour to its acidity and aftertaste. And let’s not forget its marvellous flavour. Now sit back and enjoy your cup ☺</h3>
                     

               </div>

            
            </div>
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