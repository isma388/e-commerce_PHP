<?php

require("my_function.php");
$products = [
    "iphone" => [
        "name" => "iPhone",
        "price" => 45000,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "assets/iphone_12.png"
    ],
    "ipad" => [
        "name" => "ipad",
        "price" => 10000,
        "weight" => 500,
        "discount" => 15,
        "picture_url" => "assets/ipad_two.png",
    ],
    "imac" => [
        "name" => "imac",
        "price" => 20000,
        "weight" => 800,
        "discount" => 20,
        "picture_url" => "assets/imac.jpg",
    ],
];


?>

<html lang="fr">
<body>

<?php

foreach ($products as $key => $product) {
    ?>

    <div>

        <h3><?php echo $product["name"] ?></h3>
        <p><?php formatPrice($product["price"]) ?></p>
        <p><?php formatPrice(priceExcludingVAT($product["price"])) ?></p>
        <p><?php formatPrice(discountedPrice($product["price"], $product["discount"])) ?></p>

        <img src="<?php echo $product["picture_url"] ?>" width="310" alt="">
    </div>

<?php } ?>
</body>
</html>
