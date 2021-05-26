<?php 

include "lib/php/functions.php";
include "parts/templates.php";
include "data/api.php";



$_SESSION['num'] = isset($_SESSION['num'])?
$_SESSION['num'] + 1 :
0;



setDefault('s',''); // search
setDefault('t','products_all'); // type
setDefault('d','DESC'); // order direction
setDefault('o','date_create'); // order by
setDefault('l','20'); // limit

// pretty_dump($_GET);


function makeSortOptions() {
   $options = [
      ["date_create","DESC","Sort By: Latest Products"],
      ["date_create","ASC","Sort By: Oldest Products"],
      ["price","DESC","Sort By: Highest Price"],
      ["price","ASC","Sort By: Lowest Price"]
   ];
   foreach($options as [$orderby,$direction,$name]) {
      echo "
      <option data-orderby='$orderby' data-direction='$direction'
      ".($_GET['o']==$orderby && $_GET['d']==$direction ? "selected" : "").">
      $name</option>
      ";
   }
}


if(isset($_GET['t'])) {
   $result = makeStatement($_GET['t']);
   $products = isset($result['error']) ? [] : $result;
} else {
   $result = makeStatement("products_all");
   $products = isset($result['error']) ? [] : $result;
}





?><!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon" href="images/Baristas_logo_BK.png">
   <title>Coffee Products</title>

   <?php include "parts/meta.php" ?>

</head>
<body>
   <?php include "parts/navbar.php" ?>
   <?php include "parts/categorybar.php" ?>

   <div class="view-window display-flex flex-align-center flex-justify-center" style="background-image: url(images/hero-image.jpg);">
         <h1 style="color: var(--color-white);">Carefully brewed <br><span style="font-size: 3em;">Just for you.</span></h1>
   </div>




   <div class="container card transparent" style="margin-bottom: 0; margin-top: 2em;">
      <div class="grid gap">
         <div class="col-xs-12 col-md-4">
            <?php

               if(isset($_GET['category'])) {
                  showName($_GET['category']);
                  } else {
                  echo "<h2>Product List</h2>";

               }

            function showName ($category) {
               switch($category) {
                  case "condiments":
                  echo "<h2>Condiments</h2>";
                  break;

                  case "accessories":
                  echo "<h2>Accessories</h2>";
                  break;

                  case "capsule":
                  echo "<h2>Capsule Assortments</h2>";
                  break;

                  case "machine":
                  echo "<h2>Coffee Machine</h2>";
                  break;

                  default: echo "<h2>Product List</h2";


               }

            }

?>
         </div>

         <div class="col-xs-12 col-md-4">
               <form action="coffeeproducts.php" method="get" class="hotdog right">
               <div class="flex-stretch">
                  <input type="hidden" name="t" value="search">
                  <input type="hidden" name="d" value="<?=$_GET['d']?>">
                  <input type="hidden" name="o" value="<?=$_GET['o']?>">
                  <input type="hidden" name="l" value="<?=$_GET['l']?>">
                  <input type="search" name="s" placeholder="Search" value="<?= $_GET['s'] ?>">
               </div>
               <div class="flex-none">
                  <img src="images/icon/search.svg" alt="" class="icon">
                  </div>
            </form>
                     
         </div>

         <div class="col-xs-12 col-md-4">
            <form action="coffeeproducts.php" method="get" class="sort_form">
               <input type="hidden" name="t" value="search">
               <input type="hidden" name="s" value="<?=$_GET['s']?>">
               <input type="hidden" name="d" value="<?=$_GET['d']?>">
               <input type="hidden" name="o" value="<?=$_GET['o']?>">
               <input type="hidden" name="l" value="<?=$_GET['l']?>">
               <div class="form-select">
                  <select onChange="checkSort(this)">
                     <? makeSortOptions() ?>
                  </select>
               </div>
            </form>
                        
         </div>
      </div>
</div>

   <div class="container" style="margin-bottom: 2em;">
      <div class="grid gap product-list">

         <?php

         if(empty($products)) {
            echo "No products found.";
         } else {
            echo array_reduce($products,'makeProductList');
         }
         ?>
      </div>
      
   </div>



</body>

<?php include "parts/footer.php" ?>
</html>