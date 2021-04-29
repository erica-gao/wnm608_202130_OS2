<?php



function makeProductList($r, $o) {

	// current reducing value; current object that's being reduced 
	return $r.<<<HTML
<div class="col-xs-12 col-sm-6 col-md-4">
   <a href="product_item.php?id=$o->id">
      <div class="three_item_image_wrap" style="background-image: url(images/store/$o->image_thumb);"></div>

      <div class="product_name"><h4 style="margin-top: 1em; margin-bottom: 0.3em;">$o->name</h4></div>
      <div class="product_name"><p style="text-align: center; font-weight: 400; color: var(--color-neutral-dark); margin:0.1em;">$o->description</p></div>
      <p style="text-align: center;"><a class="btn btn-cart btn-lg" href="product_added_to_cart.php">Add to Cart</a></p>
   </a>

   </div>

      
HTML;

}



function makeCartList($r,$o) {
return $r.<<<HTML
<div class="display-flex">
   <div class="flex-none image-thumbs">
      <img src="images/store/$o->image_thumb">
   </div>
   <div class="flex-stretch" style="margin-left: 2em; margin-top: 1.3em;">
      <strong>$o->name</strong>

      <div class="flex-none" style="margin-top: 1em;">
      <div class="quantity buttons_added">
         <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
       </div>
       </div>

      <div class="display-flex" style="margin-top: 1em;">

      <h5>Remove</h5>
      </div>

      
   </div>
   <div class="flex-none">
      &dollar;$o->price
   </div>
</div>
HTML;
}