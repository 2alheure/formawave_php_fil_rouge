<?php

function accrocheArticle(array $article = null)
{
    if (empty($article['contenu'])) return 'Accroche indisponible...';

    return substr($article['contenu'], 0, 200) . '...';
}

function connectDBWithMysqli()
{
    require 'config_db.php';
    $bdd =  new mysqli($host, $user, $password, $dbname);

    if ($bdd->connect_error) {
        die('Erreur de connexion (' . $bdd->connect_errno . ') ' . $bdd->connect_error);
    }

    return $bdd;
}

function connectDBWithPDO()
{
    require 'config_db.php';
    try {
        $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $user, $password);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    return $bdd;
}
