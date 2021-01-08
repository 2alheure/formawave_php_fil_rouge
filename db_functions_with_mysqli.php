<?php

function connectDB()
{
    require 'config_db.php';

    $bdd =  new mysqli($host, $user, $password, $dbname);

    if ($bdd->connect_error) {
        die('Erreur de connexion (' . $bdd->connect_errno . ') ' . $bdd->connect_error);
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

        if ($query->num_rows == 0) {
            return false;
        } else {
            return $query->fetch_all(MYSQLI_ASSOC);
        }
    } else {    // Un seul article

        if (is_numeric($id)) {

            $stmt = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
            $stmt->bind_param('i', $id);
            $result = $stmt->execute();

            if (!$result) {
                return false;
            }

            $stmt->bind_result($article_id, $titre, $date, $contenu, $image, $image_alt, $image_copyright);


            if (!($stmt->fetch())) {
                return false;
            } else {
                return array(
                    'id' => $article_id,
                    'titre' => $titre,
                    'date' => $date,
                    'contenu' => $contenu,
                    'image' => $image,
                    'image_alt' => $image_alt,
                    'image_copyright' => $image_copyright,
                );
            }
        } else {
            header('location: errors/500.php');
            die;
        }
    }
}
