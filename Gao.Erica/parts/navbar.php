<header class="navbar">
      <div class="container display-flex flex-align-center">
         <div class="flex-none">
            <h1 style="color: var(--color-white);">Baristas</h1>
         </div>
         <div class="flex-stretch">
         </div>
         <nav class="flex-none nav flex">
            <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="coffeeproducts.php">Shop</a></li>
               <li><a href="index.php#aboutus">About Us</a></li>
               <li><a href="cart.php">
               <span>Cart</span>
               <span class="badge"><?= makeCartBadge() ?></span>
            </a></li>
            </ul>
            
         </nav>
      </div>
   </header>