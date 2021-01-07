<?php

function connectDB() {
    // On récupère nos paramètres de connexion
    require 'config_db.php';

    try {
        // On crée une connexion
        $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $user, $password);
    } catch (Exception $e) {
        // S'il y a une erreur, on interrompt le script
        die('Erreur : ' . $e->getMessage());
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

        if ($query->rowCount() == 0) {
            // S'il n'y a pas de résultat, on renvoie false;
            return false;
        } else {
            // Sinon, on renvoie les articles sous forme de tableau associatif
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    } else {    // Un seul article

        if (is_numeric($id)) {      // On vérifie que id est numérique !

            // On prépare une requête paramétrée avec notre id
            $stmt = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
            // On exécute la requête (le paramètre est bindé automatiquement)
            $verif = $stmt->execute(array($id));

            if (!$verif || !($article = $stmt->fetch(PDO::FETCH_ASSOC))) {
                // Si une erreur est survenue ou si on n'a pas de résultat, on renvoie false
                return false;
            } else {
                // Sinon on renvoie l'article
                return $article;
            }
        } else {
            // Si jamais id n'est pas numérique, on interrompt l'exécution du script
            die('Erreur lors de la tentative de récupération d\'un article : id doit être un nombre.');
        }
    }
}
