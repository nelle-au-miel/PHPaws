<?php

function lien(string $url, string $texte): string {
    $url = htmlspecialchars($url);
    $texte = htmlspecialchars($texte);

    return '<a href="' . $url . '">' . $texte . '</a>';
}
echo lien('/profil', 'Mon profil');
// <a href="/profil">Mon profil</a>

?>