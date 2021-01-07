<?php

function connectDB() {
    // On récupère nos paramètres de connexion
    require 'config_db.php';

    // On crée une connexion
    $bdd =  new mysqli($host, $user, $password, $dbname);

    if ($bdd->connect_error) {
        // S'il y a une erreur, on interrompt le script
        die('Erreur de connexion (' . $bdd->connect_errno . ') ' . $bdd->connect_error);
    }

    // On retourne la connexion
    return $bdd;
}

/**
 * Si on fournit id, 
 * alors on cherche UN article qui a cet id
 * 
 * Sinon, on prend TOUS les articles
 */
function getArticle($bdd, $id = null) {
    if (empty($id)) {   // Tous les articles

        // On exécute une requête pour récupérer tous les articles
        $query = $bdd->query('SELECT * FROM articles');

        if ($query->num_rows == 0) {
            // S'il n'y a pas de résultat, on renvoie false;
            return false;
        } else {
            // Sinon, on renvoie les articles sous forme de tableau associatif
            return $query->fetch_all(MYSQLI_ASSOC);
        }
    } else {    // Un seul article

        if (is_numeric($id)) {      // On vérifie que id est numérique !

            // On prépare une requête paramétrée avec notre id
            $stmt = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
            // On bind notre paramètre
            $stmt->bind_param('i', $id);
            // On exécute la requête
            $result = $stmt->execute();

            if (!$result) {
                // Si une erreur est survenue, on renvoie false
                return false;
            }

            // On bin les variables de retour
            $stmt->bind_result($article_id, $titre, $date, $contenu, $lien, $image, $image_alt, $image_copyright);


            if (!($stmt->fetch())) {
                // Si on n'a pas de résultat, on renvoie false
                return false;
            } else {
                // Sinon on renvoie l'article
                return array(
                    'id' => $article_id,
                    'titre' => $titre,
                    'date' => $date,
                    'contenu' => $contenu,
                    'lien' => $lien,
                    'image' => $image,
                    'image_alt' => $image_alt,
                    'image_copyright' => $image_copyright,
                );
            }
        } else {
            // Si jamais id n'est pas numérique, on interrompt l'exécution du script
            die('Erreur lors de la tentative de récupération d\'un article.');
        }
    }
}
