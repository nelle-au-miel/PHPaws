<?php

function badge(string $texte, string $couleur = 'purple'): string
{
    $texte = htmlspecialchars($texte);
    return '<span class="badge badge--' . $couleur . '">' . $texte . '</span>';
}

echo badge('Réussi', 'succes');
// <span class="badge badge--succes">Réussi</span>
echo badge('À faire');
// <span class="badge badge--neutre">À faire</span>

?>

<style>
.badge--succes {
    color: green;
}

.badge--purple {
    color: plum;
}
</style>
