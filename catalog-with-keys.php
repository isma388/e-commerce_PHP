<?php
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

<html>
<body>
<div>
    <h3><?php echo $iphone["name"]?></h3>
    <p><?php echo $iphone["price"]?></p>
    <img src="<?php echo $iphone["picture_url"]?>">
</div>
<br><br>
<div>
    <h3><?php echo $ipad["name"]?></h3>
    <p><?php echo $ipad["price"]?></p>
    <img src="<?php echo $ipad["picture_url"]?>">
</div>
<br><br>
<div>
    <h3><?php echo $imac["name"]?></h3>
    <p><?php echo $imac["price"]?></p>
    <img src="<?php echo$imac["picture_url"]?>">
</div>
</body>
</html>


