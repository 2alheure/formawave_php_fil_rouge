<?php
/**
 * Ce fichier représente les fonctions dont on peut avoir besoin sur chaque page
 * Ca évite de les copier-coller partout.
 */


function accrocheArticle(array $article = null)
{
    if (empty($article['contenu'])) return 'Accroche indisponible...';

    return substr($article['contenu'], 0, 200) . '...';
}
