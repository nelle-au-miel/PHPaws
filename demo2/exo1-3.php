<?php

function chercherEtudiant(array $etudiants, string $nom): ?array
{
    foreach ($etudiants as $etudiant) {
        if ($etudiant['nom'] == $nom) {
            return $etudiant;
        }
    }
    return null;
}

$liste = [
    ['nom' => 'Amélie', 'note' => 87],
    ['nom' => 'Liam',   'note' => 72]
];

$etudiant1 = chercherEtudiant($liste, 'Liam'); // ['nom' => 'Liam', 'note' => 72]
$etudiant2 = chercherEtudiant($liste, 'Zoé');  // null

echo $etudiant1['nom'];
echo $etudiant2;

?>