<?php

function connectDB()
{
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
function getArticle($bdd, $id = null)
{
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
            header('location: errors/500.php');
            die;
        }
    }
}

function insertArticle($bdd, array $article = null)
{
    require_once('functions.php');

    if (checkArticle($article)) {
        $article['date'] = date('Y-m-d');
        
        $stmt = $bdd->prepare('INSERT INTO articles VALUE (NULL, :titre, :contenu, :image, :image_alt, :image_copyright, :date)');
        $verif = $stmt->execute($article);

        return $verif;
    } else {
        die('L\'article évalué n\'est pas correctement rempli !');
    }
}
