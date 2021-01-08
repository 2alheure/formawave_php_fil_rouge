<?php
// On ne fixe plus l'id à la main
// Mais on le récupère de l'URL
$article_id = $_GET['id'];

// Attention, ça n'empêche pas de vérifier sa valeur !
if (!is_numeric($id)) {
    die('Une erreur s\'est produite !');
}

include './article_layout.php';
