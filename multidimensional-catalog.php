<?php
require ("my_function.php");

$products = [
    "iphone" => [
        "name" => "iPhone",
        "price" => 45000,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "assets/iphone_12.png"
    ],
    "ipad" => [
        "name" => "iPad",
        "price" => 98000,
        "weight" => 400,
        "discount" => null,
        "picture_url" => "assets/ipad.jpg"
    ],
];



?>

<html lang="fr">
    <body>

    <?php foreach ($products as $product){?>


    <div>
        <h3><?php echo $product["name"]?></h3>
        <p><?php echo formatPrice($product["price"])?></p>
        <p><?php echo formatPrice(priceExcludingVAT($product["price"])) . "HT"?></p>
        <p><?php echo formatPrice(discountedPrice($product["price"],$product["discount"]))?></p>

        <img src="<?php echo $product["picture_url"]?>" alt="">
    </div>

<?php } ?>

    </body>
</html>
