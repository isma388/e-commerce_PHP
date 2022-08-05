<?php

function formatPrice($prix)
{
    echo number_format($prix/100, 2) . "€";
}

function priceExcludingVAT($prixTTC, $TVA = 20)
{
    return (100 * $prixTTC) / (100 + $TVA);
}

function discountedPrice($prix, $discount)
{
    return $prix / (1 + $discount / 100);
}