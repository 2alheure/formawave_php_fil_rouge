<?php
// On ne fixe plus l'id à la main
// Mais on le récupère de l'URL
$article_id = $_GET['id'];

// Attention, ça n'empêche pas de vérifier sa valeur !
if (!is_numeric($article_id)) {
    // Redirige vers page errors/500
    header('location: errors/500.php');
    // Toujours interrompre le script au cas où
    die;
}

include './article_layout.php';
