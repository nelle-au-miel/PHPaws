<?php

$products = [
    ["name" => "Café", "category" => "boisson", "price" => 3.50],
    ["name" => "Thé", "category" => "boisson", "price" => 2.75],
    ["name" => "Muffin", "category" => "nourriture", "price" => 4.25],
    ["name" => "Sandwich", "category" => "nourriture", "price" => 8.95],
    ["name" => "Salade", "category" => "nourriture", "price" => 7.50],
];
usort($products, fn($a, $b) => $a["price"] <=> $b["price"]);

echo "<h1>Nos produits</h1>";
echo "<table border=1>";
echo "<th>Nom</th>  <th>Catégorie</th>  <th>Prix</th>";
foreach ($products as $product) {
    $nom = htmlspecialchars($product["name"]);
    $categorie = htmlspecialchars($product["category"]);
    $prix = number_format($product["price"], 2, ',');

    echo "<tr>
            <td>{$nom}</td>
            <td>{$categorie}</td>
            <td>{$prix} $</td>
        </tr>";
}
$nbProduits = count($products);
echo "<tr>
        <td colspan=2><strong>Nombre total de produits</strong></td>
        <td><strong>{$nbProduits}</strong></td>
    </tr>";
echo "</table>";

$cheapProducts = array_filter($products, fn($product) => $product["price"] < 5);

echo "<h2>Produits en bas de 5 $</h2>";
echo "<ul>";
foreach ($cheapProducts as $cheapProduct) {
    $nom = htmlspecialchars($cheapProduct["name"]);
    $categorie = htmlspecialchars($cheapProduct["category"]);
    $prix = number_format($cheapProduct["price"], 2, ',');

    echo "<li>{$nom} ($categorie) : {$prix} $</li>";
}
echo "</ul>";

?>