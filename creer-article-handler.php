<?php

include './db_functions_with_mysqli.php';
$bdd = connectDB();

// On récupère les données de notre formulaire
$article = array(
    'titre' => $_POST['titre'],
    'contenu' => $_POST['contenu'],
    'image' => $_POST['image'],
    'image_alt' => $_POST['image_alt'],
    'image_copyright' => $_POST['image_copyright'],
);

if (insertArticle($bdd, $article)) {
    // Si la requête a réussi, on renvoie vers la page du nouvel article
    // lastInsertId permet de récupérer... Le dernier id inséré ;-)
    
    // Version mysqli
    header('location: article.php?id=' . $bdd->insert_id);

    // Version PDO
    // header('location: article.php?id=' . $bdd->lastInsertId());
} else {
    // Sinon on renvoie vers le formulaire (qui indique une erreur ;-)
    header('location: creer-article.php?error=true');
}
