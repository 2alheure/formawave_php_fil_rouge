<?php

include './db_functions_with_mysqli.php';
$bdd = connectDB();

$article = array(
    'titre' => $_POST['titre'],
    'contenu' => $_POST['contenu'],
    'image' => $_POST['image'],
    'image_alt' => $_POST['image_alt'],
    'image_copyright' => $_POST['image_copyright'],
);

if (insertArticle($bdd, $article)) {
    // Version mysqli
    header('location: article.php?id=' . $bdd->insert_id);

    // Version PDO
    // header('location: article.php?id=' . $bdd->lastInsertId());
} else {
    header('location: creer-article.php?error=true');
}
