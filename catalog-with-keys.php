<?php

require ("my_function.php");
$iphone = [
    "name" => "iPhone",
    "price" => 45000,
    "weight" => 200,
    "discount" => 10,
    "picture_url" => "assets/iphone_12.png",
];

$ipad = [
    "name" => "ipad",
    "price" => 1000,
    "weight" => 500,
    "discount" => 15,
    "picture_url" => "assets/ipad.jpg",
];

$imac = [
    "name" => "imac",
    "price" => 2000,
    "weight" => 800,
    "discount" => 20,
    "picture_url" => "assets/imac.jpg",
];

?>

<html lang="fr">
<body>

  <?php
  $products =$iphone;
  $products =$ipad;
  $products =$imac;
  function echoformatPrice(float|int $priceExcludingVAT)
  {

  }

  foreach ($products as $product){?>

<div>
    <h3><?php echo $iphone["name"]?></h3>
    <p><?php echo formatPrice($iphone["price"])?></p>
    <p><?php echo formatPrice(priceExcludingVAT($iphone["price"]))?></p>
    <p><?php echo formatPrice(discountedPrice($product["price"],$product["discount"]))?></p>

    <img src="<?php echo $iphone["picture_url"]?>" alt="">
</div>
<br><br>
<div>
    <h3><?php echo $ipad["name"]?></h3>
    <p><?php echo formatPrice($ipad["price"])?></p>
    <p><?php echoformatPrice(priceExcludingVAT($ipad["price"]))?></p>
    <p><?php formatPrice(discountedPrice($product["price"],$product["discount"]))?></p>
    <img src="<?php echo $ipad["picture_url"]?>" alt="">
</div>
<br><br>
<div>
    <h3><?php echo $imac["name"]?></h3>
    <p><?php echo $imac["price"]?></p>
    <img src="<?php echo$imac["picture_url"]?>" alt="">
</div>

<?php } ?>
</body>
</html>
