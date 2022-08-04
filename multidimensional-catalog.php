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
        "picture_url" => "assets/ipad_two.png"
    ],
];



?>

<html lang="fr">
    <body class="text-bg-warning">

    <?php foreach ($products as $key => $product){?>

    <div class="m-2  ">
            <div class="d-flex gap-3 mb-2 text-dark ">

                <img src="<?php echo $product["picture_url"]?>" width="300" alt="">
                <div class="flex-column-reverse">
                <h3><?php echo $product["name"]?></h3>
                    <br>
                <p>Prix : <?php  formatPrice($product["price"])?></p>
                <p> Prix HT : <?php  formatPrice(priceExcludingVAT($product["price"]))?></p>
                <p> Prix en soldes : <?php formatPrice(discountedPrice($product["price"],$product["discount"]))?></p>
                </div>


            </div>
        <br>
        <div class="start-50">
            <form action="cart.php" method="post">
                <label>
                    <input type="number" name="quantité" value="0" min="1">
                    <input type="hidden"  name="valeur" value="<?= $key ?>">
                </label>
                <button class="btn btn-primary btn-sm" type="submit">Ajouter au panier</button>
            </form>
            <div class="d-flex flex-column mt-4">

         </div>
    </div>
<?php } ?>

    </body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>
