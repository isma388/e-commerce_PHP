<?php
$name ="chargeur";
$price ="5€";
$image ="assets/chargeur.jpeg";

?>
<html lang="fr">
<body>
<header>
    <?php require("header.php")  ?>
</header>
<h1>artcile : <?= $name ?></h1>
<p> prix : <?php echo $price ?></p>
<img src="<?php echo $image?>" alt="">


<footer>
    <?php require("footer.php")  ?>
</footer>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>

