<?php

$prixHT = number_format(25.99, 2);
$tps = number_format($prixHT * 0.05, 2);
$tvq = number_format($prixHT * 0.0975, 2);
$total = number_format($prixHT + $tps + $tvq, 2, ',');

echo "Sous-total : {$prixHT} $ <br>";
echo "TPS : {$tps} $ <br>";
echo "TVQ : {$tvq} $ <br>";
echo "Total : {$total} $ <br>";

?>