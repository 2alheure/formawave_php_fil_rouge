<?php

function connectDB() {
    require 'config_db.php';

    try {
        $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $user, $password);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

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

        $query = $bdd->query('SELECT * FROM articles');

        if ($query->rowCount() == 0) {
            return false;
        } else {
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    } else {    // Un seul article

        if (is_numeric($id)) {
            $stmt = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
            $verif = $stmt->execute(array($id));

            if (!$verif || !($article = $stmt->fetch(PDO::FETCH_ASSOC))) {
                return false;
            } else {
                return $article;
            }
        } else {
            die('Erreur lors de la tentative de récupération d\'un article : id doit être un nombre.');
        }
    }
}
