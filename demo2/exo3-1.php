<?php

function aire(float $largeur, float $hauteur): float {
    return $largeur * $hauteur;
}
echo "Salon : " . aire(4, 3) . " m²\n";
echo "Cuisine : " . aire(5, 2.5) . " m²\n";
echo "Chambre : " . aire(6, 4) . " m²\n";

?>