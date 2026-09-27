<?php

function badge(string $texte, string $couleur = 'succes'): string
{
    $texte = htmlspecialchars($texte);
    return '<span class="badge badge--' . $couleur . '">' . $texte . '</span>';
}

function carteEtudiant(array $etudiant): string
{
    $nom = $etudiant['nom'];
    $note = $etudiant['note'];

    $statut = $note >= 60 ? 'succes' : 'echec';

    $badge = badge($note, $statut);

    return <<<HTML
            <div class="carte">
                <h3>{$nom}</h3>
                {$badge}
            </div>
            HTML;
}

echo carteEtudiant(['nom' => 'Sofia', 'note' => 94]);
echo carteEtudiant(['nom' => 'Jaynelle', 'note' => 20]);
// <div class="carte">
//     <h3>Sofia</h3>
//     <span class="badge badge--succes">94 %</span>
// </div>

?>

<style>
    .badge--succes {
        color: green;
    }

    .badge--echec {
        color: red;
    }
</style>