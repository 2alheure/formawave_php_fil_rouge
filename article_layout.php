<?php

/**
 * On est ici dans le "template" (ou encore "layout", ou encore gabarit) d'une page article
 */

// On inclut tout ce dont on a besoin (fonctions, données des articles)
include 'functions.php';
include 'variable_articles.php';

// Puis on définit l'article que l'on choisit d'afficher ($selected article)
$selected_article = $articles[$article_num];

/**
 * On définit le titre de la page 
 * pour éviter les erreurs dans le header
 * 
 * Puis on inclut le header
 */
$titre = $selected_article['titre'] . ' | Mon super blog';
include 'header.php';
?>

<!-- On écrit ensuite le corps de la page d'un article -->
<img src="<?= $selected_article['image'] ?>" alt="<?= $selected_article['image_alt'] ?>" class="banner" />
<small><?= $selected_article['image_copyright'] ?></small>

<h1 class="mb-4"><?= $selected_article['titre'] ?></h1>

<p><?= $selected_article['contenu'] ?></p>

<?php
// On inclut, enfin, le footer
include 'footer.php';
