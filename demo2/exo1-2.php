<?php

function moyenne(array $notes): float {
    $longueurTab = count($notes);
    if ($longueurTab < 0) {
        return 0.0;
    }
    else {
        $somme = 0.0;
        $moyenne = 0.0;
        foreach ($notes as $note) {
            $somme += $note;
            $moyenne = $somme/$longueurTab;
        }
        return $moyenne;
    }
}
echo moyenne([80, 90, 100]); // 90
echo moyenne([]);            // 0

?>