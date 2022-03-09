<!DOCTYPE html>
<html>
  <head>
    <title>cart Page</title>
    <link rel="stylesheet" href="2-shop.css"/>
    <script src="4-cart.js"></script>
  </head>
  <body>
    <!-- (A) AVAILABLE PRODUCTS -->
    <div id="products"><?php
      require "1-products.php";
      foreach ($products as $pid=>$p) { ?>
      <div class="pCell">
        <div class="pTxt">
          <div class="pName"><?=$p["name"]?></div>
          <div class="pPrice">$<?=$p["price"]?></div>
        </div>
        <img class="pImg" src="images/<?=$p["image"]?>"/>
        <button class="pAdd" onclick="cart.add(<?=$pid?>)">
          Add To Cart
        </button>
      </div>
    <?php } ?></div>

    <!-- (B) CART -->
    <div id="cart"></div>
  </body>
</html>
