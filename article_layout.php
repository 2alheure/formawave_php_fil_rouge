<?php
include 'functions.php';
include './db_functions_with_pdo.php';  // Ici on choisit d'utiliser PDO

// On récupère à présent les articles depuis la DB et non une variable
$selected_article = getArticle(connectDB(), $article_id);    // getArticle prend en paramètre $bdd, qui est en fait le retour de connectDB

$titre = $selected_article['titre'] . ' | Mon super blog';

include 'header.php';
?>


<img src="<?= $selected_article['image'] ?>" alt="<?= $selected_article['image_alt'] ?>" class="banner" />
<small><?= $selected_article['image_copyright'] ?></small>

<h1 class="mb-4"><?= $selected_article['titre'] ?></h1>

<p><?= $selected_article['contenu'] ?></p>

<?php include 'footer.php';
