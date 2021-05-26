<?php

include "../lib/php/functions.php";
include "../data/api.php";

// base in meta.php only works for front-end, not back-end

// pretty_dump($_SERVER);
// pretty_dump([$_GET,$_POST]);

$products = makeStatement("products_admin_all");

//pretty_dump($products);



$empty_object = (object) [
   "name"=>"Baristas Cappucino Cups Set",
   "price"=>"45.00",
   "category"=>"accessories",
   "description"=>"A contemporary and classic design, the Baristas Collection sheds a modern glow on Italian elegance. The white porcelain cups bring a slight twist to the traditional Italian barista know-how. The rim reveals each and every one of the aromas in your coffee. For a cosy touch, it has a matte finish, and for a dash of elegance, the sleek design combines the dense porcelain with a linear look. A contrast with the translucent ochre red saucer. Putting coffee traditions in a new light.",
   "intro" => "Set of 2 Cappuccino cups in white porcelain.",
   "image_main"=>"coffeecups2.jpeg",
   "image_thumb"=>"coffeecups2.jpeg",
   "quantity"=>"30",
   
];



switch(@$_GET['crud']) {
   case 'update':
      makeStatement("product_update");
      header("location:{$_SERVER['PHP_SELF']}?id=".$_GET['id']);
      break;
   case 'create':
      $result = makeStatement("product_insert");
      header("location:{$_SERVER['PHP_SELF']}?id=".$result->insert_id);
      break;
   case 'delete':
      makeStatement("product_delete");
      header("location:{$_SERVER['PHP_SELF']}");
      break;
}





function productListItem($r,$product) {
return $r.<<<HTML
<div class="card-section">
   <div class="display-flex">
      <div class="flex-none image-thumbs" style="margin-top: 0; padding-right: 1em;">
         <img src="images/store/$product->image_thumb">
      </div>
      <div class="flex-stretch">
         <div class="flex-none">$product->name</div>
         <div class="flex-none" style="margin-top: 1em;"><h5>Quantity: $product->quantity</h5></div>

      </div>  
      <div class="flex-none">
         <a href="{$_SERVER['PHP_SELF']}?id=$product->id" class="form-button btn-primary" style="color: white;">Edit</a>
         <a href="product_item.php?id=$product->id" class="form-button btn-success" style="color: white;">Visit</a>
      </div>  
   </div>
</div>
HTML;
}


function showProductPage($product) {

$id = $_GET['id'];
$thumbs = explode(",", $product->image_thumb);
$thumb_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='images/store/$o'>";
});
$addoredit = $id=="new" ? 'Add' : 'Edit';
$createorupdate = $id=="new" ? 'create' : 'update';
$showvisitlink = $id!="new" ? "<div><a href='product_item.php?id=$id' class='form-button btn-info' style='color: white;''>Visit</a></div>" : "";

echo <<<HTML
<div class="grid gap">
<div class="col-xs-12">
<div class="card soft">
<nav class="nav pills display-flex">
   <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}"><img src="images/icon/arrow-left.svg" class="icon" style="font-size:1.5em"></a></div>
   <div class="flex-stretch"></div>
   <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$id&crud=delete"><img src="images/icon/trash.svg" class="icon" style="font-size:1.5em"></a></div>
</nav>
</div>
</div>
<div class="col-xs-12 col-md-4">
   <div class="card soft">
      <h2>$product->name</h2>
      <div style="margin-top: 1.5em;">
         <strong>Price</strong>
         <div>&dollar;$product->price</div>
      </div>
      <div style="margin-top: 1.5em;">
         <strong>Category</strong>
         <div>$product->category</div>
      </div>
      <div style="margin-top: 1.5em;">
         <strong>Description</strong>
         <div>$product->description</div>
      </div>
      <div style="margin-top: 1.5em;">
         <strong>Image Thumb</strong>
         <div class="image-thumbs">
            <img src="images/store/$product->image_thumb">
         </div> 
      </div>
      <div style="margin-top: 1.5em;">
         <strong>Image Other</strong>
         <div class="image-thumbs">$thumb_elements</div>
      </div>
      <div style="margin-top: 1.5em;">
         <strong>Quantity</strong>
         <div>$product->quantity</div>
      </div>
      $showvisitlink
   </div>
</div>
<form class="col-xs-12 col-md-8" method="post" action="{$_SERVER['PHP_SELF']}?id=$id&crud=$createorupdate">
   <div class="card soft">
      <h2>$addoredit Product</h2>
      <input type="hidden" name="id" value="$id">
      <div class="form-control">
         <label class="form-label" for="product-title">Name</label>
         <input class="form-input" type="text" id="product-name" name="product-name" value="$product->name">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-price">Price</label>
         <input class="form-input" type="number" min="1" step=".01" id="product-price" name="product-price" value="$product->price">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-category">Category</label>
         <input class="form-input" type="text" id="product-category" name="product-category" value="$product->category">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-description">Description</label>
         <textarea class="form-input" id="product-description" name="product-description">$product->description</textarea>
      </div>
      <div class="form-control">
         <label class="form-label" for="product-intro">Intro</label>
         <textarea class="form-input" id="product-intro" name="product-intro">$product->intro</textarea>
      </div>
      <div class="form-control">
         <label class="form-label" for="product-image_thumb">Image Main</label>
         <input class="form-input" type="text" id="product-image_main" name="product-image_main" value="$product->image_main">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-image_other">Image Thumb</label>
         <input class="form-input" type="text" id="product-image_thumb" name="product-image_thumb" value="$product->image_thumb">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-quantity">Quantity</label>
         <input class="form-input" type="number" id="product-quantity" name="product-quantity" value="$product->quantity">
      </div>
      <div class="form-control">
         <input class="form-button btn-confirm" type="submit" value="Submit">
      </div>
   </div>
</form>
</div>
HTML;
}





?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Administrator</title>
   <?php include "../parts/meta.php" ?>
</head>
<body>
   <header class="navbar">
      <div class="container display-flex flex-align-center">
         <div class="flex-none">
            <h1 style="color: var(--color-white);">Product Admin</h1>
         </div>
         <div class="flex-stretch"></div>
         <nav class="flex-none nav flex">
            <ul>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
            </ul>
         </nav>
      </div>
   </header>

   <div class="container">

         <?php
         if(isset($_GET['id'])) {
            // ternary, conditional
            showProductPage(
               $_GET['id']=="new" ?
               $empty_object :
               getItemById($products,$_GET['id'])
            );
         } else {
         ?>

      <div class="card soft flat">
         <div class="card-section"><h2>Product List</h2></div>
         <?php

         echo array_reduce($products,'productListItem');

         ?>
      </div>
         <?php
         }
         ?>
   </div>
</body>
</html>