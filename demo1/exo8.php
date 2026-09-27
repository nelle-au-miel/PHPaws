<?php

use function PHPSTORM_META\map;

$products = [
    ["name" => "Café", "category" => "boisson", "price" => 3.50],
    ["name" => "Thé", "category" => "boisson", "price" => 2.75],
    ["name" => "Muffin", "category" => "nourriture", "price" => 4.25],
    ["name" => "Sandwich", "category" => "nourriture", "price" => 8.95],
];
$prixMoyen = 0.0;

echo "<h1>Produits</h1>";
echo "<ul>";
foreach ($products as $product) {
    $nom = $product["name"];
    $categorie = $product["category"];
    $prix = number_format($product["price"], 2, ',');

    echo "<li>{$nom} ({$categorie}) : {$prix} $</li>";

    $prixMoyen += round($product["price"]/count($products), 2);
}
echo "</ul>";

$cheapProducts = array_filter($products, fn($product) => $product["price"] < 5);

echo "<h2>Produits en bas de 5 $</h2>";
echo "<ul>";
foreach ($cheapProducts as $cheapProduct) {
    $nom = $cheapProduct["name"];
    $categorie = $cheapProduct["category"];
    $prix = number_format($cheapProduct["price"], 2, ',');

    echo "<li>{$nom} ({$categorie}) : {$prix} $</li>";
}
echo "</ul>";

echo "Prix moyen : {$prixMoyen} $";

?>