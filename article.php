<?php
$article_id = $_GET['id'];

if (!is_numeric($article_id)) {
    header('location: errors/500.php');
    die;
}

include './article_layout.php';
