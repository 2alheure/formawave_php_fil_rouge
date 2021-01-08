<?php

function accrocheArticle(array $article = null)
{
    if (empty($article['contenu'])) return 'Accroche indisponible...';

    return substr($article['contenu'], 0, 200) . '...';
}

function checkArticle(array $article = null, bool $isInsert = true)
{
    if (empty($article)) return false;

    // On vérifie id s'il est fourni (donc si on n'est pas dans une insertion)
    if (!$isInsert) {
        if (empty($article['id']) || !is_numeric($article['id'])) return false;
    }

    // On vérifie que le titre n'est pas trop long
    if (empty($article['titre']) || strlen($article['titre']) > 255) return false;

    // On vérifie la date et son format si nous ne sommes pas en insertion
    if (!$isInsert) {
        if (empty($article['date']) || $article['date'] != date('Y-m-d')) return false;
    }
    
    // On vérifie que le reste des infos est présent
    if (
        empty($article['contenu'])
        || empty($article['image'])
        || empty($article['image_alt'])
        || empty($article['image_copyright'])
    ) return false;

    // Si tout va bien, on peut retourner true
    return true;
}
