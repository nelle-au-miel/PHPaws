<?php

function listeHtml(array $items): string
{
    $lignes = [];
    foreach ($items as $item) {
        $lignes[] = '<li>' . htmlspecialchars($item) . '</li>';
    }
    return '<ul>' . implode('', $lignes) . '</ul>';
}
echo listeHtml(['Pomme', 'Poire']);
// <ul><li>Pomme</li><li>Poire</li></ul>

?>