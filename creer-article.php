<?php
$titre = 'Créer un super article | Mon super blog';
include 'header.php';

if (!empty($_GET['error'])) {
?>
    <!-- On peut imaginer afficher une erreur 
    si un paramètre de requête nous indique que ça s'est précédemment mal passé -->

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Une erreur s'est glissée dans la soumission du formulaire. Veuillez recommencer.
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>

<h1>Créer un super article</h1>
<p class="my-4">
<form action="creer-article-handler.php" method="post">
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" class="form-control" name="titre" id="titre" aria-describedby="titre-help" placeholder="Titre">
        <small id="titre-help" class="form-text text-muted">Le tire de l'article. Ne doit pas dépasser les 255 caractères.</small>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="url" class="form-control" name="image" id="image" aria-describedby="image-help" placeholder="Image">
        <small id="image-help" class="form-text text-muted">L'URL de l'image d'illustration de l'article.</small>
    </div>

    <div class="form-group">
        <label for="image_alt">Alternative Textuelle</label>
        <input type="text" class="form-control" name="image_alt" id="image_alt" aria-describedby="alt-help" placeholder="Alternative Textuelle">
        <small id="alt-help" class="form-text text-muted">Alternative textuelle de l'image.</small>
    </div>

    <div class="form-group">
        <label for="image_copyright">Copyright</label>
        <input type="text" class="form-control" name="image_copyright" id="image_copyright" aria-describedby="copyright-help" placeholder="Copyright">
        <small id="copyright-help" class="form-text text-muted">Copyright de l'image.</small>
    </div>

    <div class="form-group">
        <label for="contenu">Contenu</label>
        <textarea class="form-control" name="contenu" id="contenu" rows="5" placeholder="Saisissez ici le contenu de l'article..."></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</p>

<?php include 'footer.php';
