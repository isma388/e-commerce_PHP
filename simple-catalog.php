<?php

$products =["iPhone", "iPad", "iMac"];
asort($products);
print_r($products);
echo "<br><br>";
echo($products[0]);
echo "<br><br>";
echo($products[2]);
echo "<br><br>";
print_r($products[count($products)-1]);