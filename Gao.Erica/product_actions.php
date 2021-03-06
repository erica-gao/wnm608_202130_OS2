<?php

include_once "lib/php/functions.php";
include "parts/templates.php";

switch($_GET['crud']) {
   case "add-to-cart":
      addToCart($_POST['id']*1,$_POST['amount']*1);
      header("location:product_added_to_cart.php?id=".$_POST['id']);
      break;
   case "update-cart-item":
      $p = cartItemById($_POST['id']);
      $p->amount = $_POST['amount'];
      header("location:cart.php");
      break;
   case "delete-cart-item":
      $cart = array_filter(getCart(),function($o){
         return $o->id!=$_POST['id'];

         // looking for items that are not the POST['id']
      });
      setCart($cart);
      header("location:cart.php");
      break;

   case "reset-cart":
      $cartItems = getCart();
      resetCart();
      header("location:confirmation.php");
      break;
   default: die("Incorrect Action");
}