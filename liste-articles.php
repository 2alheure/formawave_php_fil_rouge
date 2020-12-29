<!doctype html>
<html lang="en">

<head>
    <title>Mes super articles | Mon super blog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Mon super blog</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="liste-articles.php">Mes super articles</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <h1>Mes super articles</h1>

        <?php
            $articles = array(
                array(
                    'titre' => 'Le titre d\'un super article',
                    'date' => 'Le 28/12/2020',
                    'accroche' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam pariatur ipsum soluta! Minima perspiciatis vel ullam. Suscipit nemo voluptatum magnam corrupti consectetur atque porro quos cupiditate eius, beatae nulla molestiae.',
                    'lien' => 'article.php',
                ),
                array(
                    'titre' => 'Le titre d\'un super article 2',
                    'date' => 'Le 28/12/2020',
                    'accroche' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam pariatur ipsum soluta! Minima perspiciatis vel ullam. Suscipit nemo voluptatum magnam corrupti consectetur atque porro quos cupiditate eius, beatae nulla molestiae.',
                    'lien' => 'article2.php',
                ),
                array(
                    'titre' => 'Le titre d\'un super article 3',
                    'date' => 'Le 28/12/2020',
                    'accroche' => 'Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.',
                    'lien' => 'article2.php',
                ),
            );
        ?>

        <div class="list-group my-4">
            <article class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h2 class="mb-1"><?php echo $articles[0]['titre']; ?></h2>
                    <small><?php echo $articles[0]['date']; ?></small>
                </div>
                <p class="mb-1"><?php echo $articles[0]['accroche']; ?></p>
                <small class="text-muted"><a href="<?php echo $articles[0]['lien']; ?>">Lire l'article.</a></small>
            </article>
            <article class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h2 class="mb-1"><?php echo $articles[1]['titre']; ?></h2>
                    <small><?php echo $articles[1]['date']; ?></small>
                </div>
                <p class="mb-1"><?php echo $articles[1]['accroche']; ?></p>
                <small class="text-muted"><a href="<?php echo $articles[1]['lien']; ?>">Lire l'article.</a></small>
            </article>
            <article class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h2 class="mb-1"><?php echo $articles[1]['titre']; ?></h2>
                    <small><?php echo $articles[1]['date']; ?></small>
                </div>
                <p class="mb-1"><?php echo $articles[1]['accroche']; ?></p>
                <small class="text-muted"><a href="<?php echo $articles[1]['lien']; ?>">Lire l'article.</a></small>
            </article>
        </div>
    </div>

</body>

</html>