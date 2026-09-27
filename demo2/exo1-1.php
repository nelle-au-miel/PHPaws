<?php

function aireRectangle(float $largeur, float $hauteur): float {
    return $largeur * $hauteur;
}
echo aireRectangle(4, 3);   // 12
echo aireRectangle(2.5, 2); // 5

?>