<?php

function formaterPrix(float $montant): string {
    return number_format($montant, 2, ',', ' ') . ' $';
}

echo formaterPrix(1234.5); // "1 234,50 $"
echo formaterPrix(9.9);    // "9,90 $"

?>