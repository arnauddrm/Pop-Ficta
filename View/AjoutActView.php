<?php
$title = "";
include 'header.php';

?>

<form method="POST" enctype="multipart/form-data">

<input placeholder="nom" type="text" name="nom">
<input placeholder="prenom" type="text" name="prenom">
<input placeholder="age" type="number" name="age">
<input placeholder="nationalite" type="text" name="nation">
<input placeholder="affiche" type="file" name="affiche">

<button type="submit" name="ajout">Ajouter</button>

<button type="submit" name="annul">Annuler</button>
</form>

<?php
include 'footer.php';