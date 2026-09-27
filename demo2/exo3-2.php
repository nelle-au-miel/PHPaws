<?php

function carteEtudiant(array $etudiant): string
{
    $nom = htmlspecialchars($etudiant['nom']);
    $note = $etudiant['note'];

    return '<div class="carte"><h3>' . $nom . '</h3><p>' . $note . ' %</p></div>';
}
$etudiants = [
    ['nom' => 'Amélie', 'note' => 87],
    ['nom' => 'Liam', 'note' => 72],
    ['nom' => 'Sofia', 'note' => 94]
];
foreach ($etudiants as $etudiant) {
    echo carteEtudiant($etudiant);
}

?>
