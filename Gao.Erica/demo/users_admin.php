<?php

include "../lib/php/functions.php";

$users = file_get_json("users.json");



//pretty_dump($users);


// pretty_dump($_SERVER);
// pretty_dump($_GET);

// file_put_contents, json_encode, $_POST, explode, inverse functions for functions we learned today




function showUserPage($user) {

$classes = implode(", ", $user->classes);


echo <<<HTML
<nav class="nav crumbs">
   <ul>
      <li><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
   </ul>
</nav>



<div>
   <h2>$user->firstname $user->lastname</h2>
   <div>
      <strong>Type</strong>
      <span>$user->type</span>
   </div>
   <div>
      <strong>Email</strong>
      <span>$user->email</span>
   </div>
   <div>
      <strong>Classes</strong>
      <span>$classes</span>
   </div>
</div>


   <form name="form" method="POST">

   First Name <input type="text" class="form-input" id="inputfirstname" name="inputfirstname" placeholder="$user->firstname"><br/>
   Last Name <input type="text" class="form-input" id="inputfirstname" name="inputlastname" placeholder="$user->lastname"><br/>
   Type <input type="text" class="form-input" name="inputType" id="inputType" placeholder='$user->type' ><br/>
   Email <input type="text" class="form-input" name="inputEmail" id="inputEmail" placeholder='$user->email'><br/>
   Classes <input type="text" class="form-input" name="inputClasses" id="inputClasses" placeholder='$classes'><br/>
   <input type="submit" name="Submit" class="form-button" id="save-changes" value="Submit">

   </form>





HTML;


if(isset($_POST['submit'])) {

   $users = file_get_json("users.json");

   update_user_data($users[$_GET['id']]);
}


}



?>







<!DOCTYPE html>
<html lang="en">
<head>
   <title>User Administrator</title>
   <?php include "../parts/meta.php" ?>
</head>
<body>
   <header class="navbar">
      <div class="container display-flex flex-align-center">
         <div class="flex-none">
            <h1>User Admin</h1>
         </div>
         <div class="flex-stretch"></div>
         <nav class="flex-none nav flex">
            <ul>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
            </ul>
         </nav>
      </div>
   </header>



   <div class="container">
      <div class="card soft">

         <?php
         if(isset($_GET['id'])) {
            showUserPage($users[$_GET['id']]);
         } else {
         ?>

         <h2>User List</h2>

         <ul>
         <?php

         for($i=0; $i<count($users); $i++) {
            echo "<li>
            <a href='{$_SERVER['PHP_SELF']}?id=$i'>{$users[$i]->name}</a>
            </li>";
         }

         ?>
         </ul>
         <?php
         }
         ?>
      </div>
   </div>

</body>
</html>