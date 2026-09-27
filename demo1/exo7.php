<?php

$menu = [
    "La Sanglante" => 21.99,
    "La Carnivore" => 18.99,
    "Le Pêcheur" => 16.99,
    "Le Végétarien" => 12.99
];

echo "<ul>";
foreach ($menu as $plat => $prix) {
    $prixFormat = number_format($prix, 2, ',');
    
    echo "<li>{$plat} : {$prixFormat} $</li>";
}
echo "</ul>";

?>