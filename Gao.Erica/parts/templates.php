



<?php

function makeProductList($r, $o) {

	// current reducing value; current object that's being reduced 
	return $r.<<<HTML
<div class="col-xs-12 col-sm-6 col-md-4">
   <a href="product_item.php?id=$o->id">
      <div class="three_item_image_wrap" style="background-image: url(images/store/$o->image_thumb);"></div>

      <div class="product_name"><h4 style="margin-bottom: 0;">$o->name</h4></div>
      <div class="product_name"><p style="margin-top: 0.3em; font-weight: 400; font-size: 0.8em; color: var(--color-neutral-medium);">$o->intro</p></div>
      <div class="product_name"><h3 style="margin-top: 0.3em; font-weight: 600; color: var(--color-neutral-dark);">&dollar;$o->price</h3></div>
      
   </a>

   </div>

      
HTML;

}

function makeaddedtoCartList($r, $o) {

   // current reducing value; current object that's being reduced 
   return $r.<<<HTML

<div class="card grid gap" style="padding-top: 0em;">
   <div class="col-xs-12 col-md-3">

      <div class="flex-none image-thumbs">
      <img src="images/store/$o->image_thumb">
   </div>
    

   </div>


   <div class="col-xs-12 col-md-3">
   <p>$o->name</p>
   </div>

   <div class="col-xs-12 col-md-3">
   <p>$o->intro</p>
   </div>

   <div class="col-xs-12 col-md-3">
   <p>&dollar;$o->price</p>
   </div>


</div>

      
HTML;

}

function selectAmount($amount=1,$total=10) {
   $output = "<select name='amount'>";
   for($i=1;$i<$total;$i++) {
      $output .= "<option ".($i==$amount?'selected':'').">$i</option>";
   }
   $output .= "</select>";
   return $output;
}



function makeCartList($r,$o) {
$totalfixed = number_format($o->total,2,'.','');
$amountselect = selectAmount($o->amount,10);
return $r.<<<HTML
<div class="card grid gap" style="padding: 0 1em; margin: 0;">
   <div class="col-xs-12 col-md-4">
      <div class="flex-none image-thumbs">
         <img style="padding-right: 1em;" src="images/store/$o->image_thumb">
      </div>
   </div>
   <div class="col-xs-12 col-md-3" style="margin-top: 1.3em;">
      <strong>$o->name</strong>

      <form action="product_actions.php?crud=delete-cart-item" method="post" style="font-size:0.8em">
         <input type="hidden" name="id" value="$o->id">
         <input type="submit" value="delete" class="form-button inline">
      </form> 
   </div>

   <div class="col-xs-12 col-md-2"></div>
   <div class="col-xs-12 col-md-1" style="margin-top: 1.3em; text-align: right; width: 3em;">
      <form action="product_actions.php?crud=update-cart-item" method="post" onchange="this.submit()" style="font-size:0.8em">
         <input type="hidden" name="id" value="$o->id">
         <div class="form-select">
            $amountselect
         </div>
      </form>
   </div>

   

   <div class="col-xs-12 col-md-2" style="margin-top: 1.3em; text-align: right;">
      <div>&dollar;$totalfixed</div>
   </div>


</div>

HTML;
}

function makeCondensedCartList($r,$o) {
$totalfixed = number_format($o->total,2,'.','');
$amountselect = selectAmount($o->amount,10);
return $r.<<<HTML
   <div class="image-thumbs" style="margin-right: 1.3em;">
      <img src="images/store/$o->image_thumb">
   </div>

HTML;
}

function makeCheckoutCartList($r,$o) {
$totalfixed = number_format($o->total,2,'.','');
$amountselect = selectAmount($o->amount,10);
return $r.<<<HTML
   <div class="image-thumbs flex-none">
      <img src="images/store/$o->image_thumb">
   </div>

HTML;
}



function cartTotals() {
$cart = getCartItems();
$cartItemNumber = count($cart);

$cartprice = array_reduce($cart,function($r,$o){return $r+$o->total;},0);

$pricefixed = number_format($cartprice,2,".","");
$tax = number_format($cartprice*0.0275,2,".","");
$taxed = number_format($cartprice*1.0275,2,".","");

return <<<HTML

<div class="card-section display-flex" style="border-top: none;">
   <div class="flex-stretch">
      <strong> $cartItemNumber Items</strong>
   </div>
</div>
<div class="card-section display-flex">
   <div class="flex-stretch">
      Sub Total
   </div>
   <div class="flex-none">&dollar;$pricefixed</div>
</div>
<div class="card-section display-flex">
   <div class="flex-stretch">
      Taxes
   </div>
   <div class="flex-none">&dollar;$tax</div>
</div>
<div class="card-section display-flex">
   <div class="flex-stretch">
      <strong>Total</strong>
   </div>
   <div class="flex-none"><strong>&dollar;$taxed</strong></div>
</div>
HTML;
}



function checkoutTotals() {
$cart = getCartItems();
$cartItemNumber = count($cart);

$cartprice = array_reduce($cart,function($r,$o){return $r+$o->total;},0);

$pricefixed = number_format($cartprice,2,".","");
$tax = number_format($cartprice*0.0275,2,".","");
$taxed = number_format($cartprice*1.0275,2,".","");

return <<<HTML

<div class="card-section display-flex" style="border-top: none;">
   <div class="flex-stretch">
      
   </div>
</div>
<div class="card-section display-flex">
   <div class="flex-stretch">
      Sub Total
   </div>
   <div class="flex-none">&dollar;$pricefixed</div>
</div>
<div class="card-section display-flex">
   <div class="flex-stretch">
      Taxes
   </div>
   <div class="flex-none">&dollar;$tax</div>
</div>
<div class="card-section display-flex">
   <div class="flex-stretch">
      <strong>Total</strong>
   </div>
   <div class="flex-none"><strong>&dollar;$taxed</strong></div>
</div>
HTML;
}