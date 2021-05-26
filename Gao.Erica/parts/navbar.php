<header class="navbar">
      <div class="container display-flex flex-align-center">

         <div class="flex-none image-logo">
            <img src="images/Baristas_logo.png">
         </div>
         <div class="flex-none">
            <a style="text-decoration: none;" href="index.php"><h1 style="color: var(--color-white); font-size: 1.5em; font-style: italic; ">Baristas</h1></a>

         </div>
         <div class="flex-stretch">
         </div>
         <nav class="flex-none nav flex">
            <ul>
               <li><a href="coffeeproducts.php">Shop</a></li>
               <li><a href="index.php#aboutus">About Us</a></li>
               <li><a href="cart.php">
               <span><img style="height: 1.3em; margin-top: 1em;" src="images/icon/shopping-cart.png"></span>
               <span class="badge"><?= makeCartBadge() ?></span>
            </a></li>
            </ul>
            
         </nav>
      </div>
   </header>