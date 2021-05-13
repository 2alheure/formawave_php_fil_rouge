<?php
$titre = 'Créer un super article | Mon super blog';
include 'header.php';

if (!empty($_GET['error'])) {
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Une erreur s'est glissée dans la soumission du formulaire. Veuillez recommencer.
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>

<h1>Créer un super article</h1>
<p class="my-4">
    <!-- On doit ajouter l'attribut enctype="multipart/form-data" pour gérer les fichiers -->
<form action="creer-article-handler.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" class="form-control" name="titre" id="titre" aria-describedby="titre-help" placeholder="Titre">
        <small id="titre-help" class="form-text text-muted">Le tire de l'article. Ne doit pas dépasser les 255 caractères.</small>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <!-- On limite la taille des uploads à 10 Mo -->
        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
        <!-- On remplace l'input "text" en input "file" -->
        <input type="file" class="form-control-file" name="image" id="image" placeholder="Image" aria-describedby="image-helper" accept="image/*" MA>
        <small id="image-helper" class="form-text text-muted">L'image d'illustration de l'article</small>
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
