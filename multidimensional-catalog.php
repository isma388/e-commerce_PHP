<?php


$products = [
    "iphone" => [
        "name" => "iPhone",
        "price" => 450,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "assets/iphone_12.png"
    ],
    "ipad" => [
        "name" => "iPad",
        "price" => 450,
        "weight" => 400,
        "discount" => null,
        "picture_url" => "assets/ipad.jpg"
    ],
];

?>

<hmtl>
    <body>
    <div>
        <h3><?php echo $products["iphone"]["name"]?></h3>
        <p><?php echo $products["iphone"]["price"]?></p>
        <img src="<?php echo $products["iphone"]["picture_url"]?>">
    </div>
<br><br>
    <div>
        <h3><?php echo $products["ipad"]["name"]?></h3>
        <p><?php echo $products["ipad"]["price"]?></p>
        <img src="<?php echo $products["ipad"]["picture_url"]?>">
    </div>
    </body>
</hmtl>
