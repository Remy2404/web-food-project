<?php
require 'php/form.php';
require_once 'php/name.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="css/test.css?v=<?php echo time() ?>"  />
</head>
<body>
<main class="container">
 
 <!-- Left Column / Headphones Image -->
 <div class="left-column">
   <img  src="<?= $TagenameProduct['boom'];  ?> " alt="">
 </div>
 <!-- Right Column -->
 <div class="right-column">

   <!-- Product Description -->
   <div class="product-description">
     <span>Shopping Now</span>
     <h1>Good Price</h1>
     <p> 100% </p>
     <p> Haha Just kidding</p>
   </div>

   <!-- Product Configuration -->
   <div class="product-configuration">

     <!-- Product Color -->
     <div class="product-color">
       <span>Color</span>

       <div class="color-choose">
         <div>
           <input data-image="red" type="radio" id="red" name="color" value="red" checked>
           <label for="red"><span></span></label>
         </div>
         <div>
           <input data-image="blue" type="radio" id="blue" name="color" value="blue">
           <label for="blue"><span></span></label>
         </div>
         <div>
           <input data-image="black" type="radio" id="black" name="color" value="black">
           <label for="black"><span></span></label>
         </div>
       </div>

     </div>

     <!-- Cable Configuration -->
     <div class="cable-config">
       <span>Cable configuration</span>

       <div class="cable-choose">
         <button>Straight</button>
         <button>Coiled</button>
         <button>Long-coiled</button>
       </div>

       <a href="#">How to configurate your headphones</a>
     </div>
   </div>

   <!-- Product Pricing -->
   <div class="product-price">
     <span>148$</span>
     <a href="#" class="cart-btn">Add to cart</a>
     <a href="menu.php" class="cart-btn">Shopping</a>
   </div>
 </div>
</main>
</body>
</html>