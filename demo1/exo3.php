<?php

$raw = " cabane à sucre l'érablière dorée ";
$sansEspaces = trim($raw);
$maj = mb_strtoupper($sansEspaces);
$longueur = mb_strlen($sansEspaces);

echo "Chaîne initiale : |{$raw}| <br>";
echo "Sans espaces : |{$sansEspaces}| <br>";
echo "En majuscules : {$maj} <br>";
echo "Longueur : {$longueur}";

?>