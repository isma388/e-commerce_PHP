<?php

$products =["iPhone", "iPad", "iMac"];
sort($products);
print_r($products);
echo "<br><br>";
echo($products[0]);
echo "<br><br>";
echo($products[2]);
echo "<br><br>";
print_r($products[count($products)-1]);
echo "<br><br>";
for($i=0 ; $i < count($products); $i=$i+1){

    $product = $products[$i];
    echo $product . "<br>";

}
echo "<br><br>";
$i = 0;
while($i< count($products)){


    $product = $products[$i];
    echo $product . "<br>";
    $i=$i+1;
}
echo "<br><br>";
$i = 0;
do {

    $product = $products[$i];
    echo $product . "<br>";
    $i=$i+1;
} while ($i < count($products));

