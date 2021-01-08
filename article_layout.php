<?php
include 'functions.php';
include './db_functions_with_pdo.php';

$selected_article = getArticle(connectDB(), $article_id);

// Il faut à présent prévoir le cas où l'article demandé n'existe pas
if (empty($selected_article)) {
    // Redirige vers page 404
    header('location: 404.php');
}

$titre = $selected_article['titre'] . ' | Mon super blog';

include 'header.php';
?>


<img src="<?= $selected_article['image'] ?>" alt="<?= $selected_article['image_alt'] ?>" class="banner" />
<small><?= $selected_article['image_copyright'] ?></small>

<h1 class="mb-4"><?= $selected_article['titre'] ?></h1>

<p><?= $selected_article['contenu'] ?></p>

<?php include 'footer.php';
