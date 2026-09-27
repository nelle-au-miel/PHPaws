<?php

function trierParNote(array $etudiants): array {
    usort($etudiants, function (array $a, array $b) {
        return $b['note'] <=> $a['note'];
    });
    return $etudiants;
}
$liste = [
    ['nom' => 'Liam',   'note' => 72],
    ['nom' => 'Amélie', 'note' => 87],
    ['nom' => 'Jason', 'note' => 45],
    ['nom' => 'Piedro', 'note' => 13]
];
$newList = trierParNote($liste);

foreach ($newList as $etudiant) {
    echo $etudiant['nom'] . $etudiant['note'];
}

?>