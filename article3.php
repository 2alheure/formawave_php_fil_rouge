<?php
include 'functions.php';
include 'variable_articles.php';
$selected_article = $articles[2];

$titre = $selected_article['titre'] . ' | Mon super blog';

include 'header.php';
?>


<img src="<?= $selected_article['image'] ?>" alt="<?= $selected_article['image_alt'] ?>" class="banner" />
<small><?= $selected_article['image_copyright'] ?></small>

<h1 class="mb-4"><?= $selected_article['titre'] ?></h1>

<p><?= $selected_article['contenu'] ?></p>

<?php include 'footer.php';
