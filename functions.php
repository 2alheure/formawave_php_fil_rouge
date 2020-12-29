<?php

function accrocheArticle(array $article = null)
{
    if (empty($article['contenu'])) return 'Accroche indisponible...';

    return substr($article['contenu'], 0, 200) . '...';
}
