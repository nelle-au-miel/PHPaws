<?php

$products = [
  ["name" => "Café", "price" => 3.50],
  ["name" => "Thé", "price" => 2.75]
];

foreach ($products as $product) {
  echo "<p>" . $product["name"] . " : " . $product["price"] . "$</p>";
}

echo "Nombre de produits : " . count($product);

?>