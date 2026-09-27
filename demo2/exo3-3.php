<?php

function formaterPrix(float $montant): string {
    return number_format($montant, 2, ',', ' ') . ' $';
}

function calculerTotal(float $sousTotal): float
{
    $tps = $sousTotal * 0.05;
    $tvq = $sousTotal * 0.09975;

    return $sousTotal + $tps + $tvq;
}

echo formaterPrix(calculerTotal(100.00));
echo "<br>";
echo formaterPrix(calculerTotal(49.99));

?>