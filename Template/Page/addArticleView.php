<?php require_once("../template/partial/header.php"); ?>
<html>
<main>

    <h1>Ajouter un article</h1>

<?php  if ($isRequestOK){?>
    <p>Nouvel article ajouté avec succès"</p>
    <?php } else {?>
     <p>Erreur lors de l'ajout de l'article</p>
    <?php } ?>

</html>
<?php require_once("../template/partial/footer.php"); ?>