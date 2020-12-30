<?php

function connectDBWithMysqli()
{
    require 'config_db.php';
    $bdd =  new mysqli($host, $user, $password, $dbname);

    if ($bdd->connect_error) {
        die('Erreur de connexion (' . $bdd->connect_errno . ') ' . $bdd->connect_error);
    }

    return $bdd;
}
