<?php
$title = "";
include 'header.php';
?>

<form method="POST" enctype="multipart/form-data">

<input placeholder="titre" type="text" name="titre">
<input placeholder="duree heure" type="number" name="dureH">
<input placeholder="duree minute" type="number" name="dureM">
<input placeholder="Date de sortie (jour)" type="number" name="dateJ">
<input placeholder="Date de sortie (mois)" type="number" name="dateM">
<input placeholder="Date de sortie (année)" type="number" name="dateA">
<input placeholder="pegi" type="number" name="pegi">
<input placeholder="studio" type="text" name="studio">
<input placeholder="affiche" type="file" name="affiche">
<input placeholder="URL bande annonce" type="text" name="bande">
<textarea name="syno" cols="30" rows="10" placeholder="Synopsis"></textarea>


<!-- Créer un nouv choix de genre -->
<p>Choix Genre</p>
<div id="ChoixGenre">
<select name="Genre" >
<?php
foreach ($listG as $key => $valuer) {
    ?>
    <option value="<?php echo $valuer['id_genre']; ?>"><?php echo $valuer['type_genre']; ?></option>
    <?php
}
?>
</select>
<select name="Genre1" >
<option value="">Aucun</option>
<?php
foreach ($listG as $key => $valuer) {
    ?>
    <option value="<?php echo $valuer['id_genre']; ?>"><?php echo $valuer['type_genre']; ?></option>
    <?php
}
?>
</select>
<select name="Genre2" >
<option value="">Aucun</option>

<?php
foreach ($listG as $key => $valuer) {
    ?>
    <option value="<?php echo $valuer['id_genre']; ?>"><?php echo $valuer['type_genre']; ?></option>
    <?php
}
?>
</select>
</div>
<p onclick="popgenre()">Créer Genre</p>


<!-- Créer un nouv choix de acteur -->

<p>Choix acteur</p>
<div id="ChoixAct">
<select name="Act">
<?php
foreach ($listA as $key => $valuer) {
    ?>
    <option value="<?php echo $valuer['id_acteur']; ?>"><?php echo $valuer['nom_acteur'].' '.$valuer['prenom_acteur']; ?></option>
    <?php
}
?>
</select>
<select name="Act1">
<option value="">Aucun</option>

<?php
foreach ($listA as $key => $valuer) {
    ?>
    <option value="<?php echo $valuer['id_acteur']; ?>"><?php echo $valuer['nom_acteur'].' '.$valuer['prenom_acteur']; ?></option>
    <?php
}
?>
</select>
<select name="Act2">
<option value="">Aucun</option>

<?php
foreach ($listA as $key => $valuer) {
    ?>
    <option value="<?php echo $valuer['id_acteur']; ?>"><?php echo $valuer['nom_acteur'].' '.$valuer['prenom_acteur']; ?></option>
    <?php
}
?>
</select>
<select name="Act3">
<option value="">Aucun</option>

<?php
foreach ($listA as $key => $valuer) {
    ?>
    <option value="<?php echo $valuer['id_acteur']; ?>"><?php echo $valuer['nom_acteur'].' '.$valuer['prenom_acteur']; ?></option>
    <?php
}
?>
</select>
<select name="Act4">
<option value="">Aucun</option>

<?php
foreach ($listA as $key => $valuer) {
    ?>
    <option value="<?php echo $valuer['id_acteur']; ?>"><?php echo $valuer['nom_acteur'].' '.$valuer['prenom_acteur']; ?></option>
    <?php
}
?>
</select>
</div>
<p onclick="popact()">Créer Acteur</p>


<!-- Créer un nouv choix de realisateur -->

<p>Choix Realisateur</p>
<div id="ChoixReal">
<select name="Rea">
<?php
foreach ($listR as $key => $valuer) {
    ?>
    <option value="<?php echo $valuer['id_real']; ?>"><?php echo $valuer['nom_real'].' '.$valuer['prenom_real']; ?></option>
    <?php
}
?>
</select>
<select name="Rea1">
<option value="">Aucun</option>
<?php
foreach ($listR as $key => $valuer) {
    ?>
    <option value="<?php echo $valuer['id_real']; ?>"><?php echo $valuer['nom_real'].' '.$valuer['prenom_real']; ?></option>
    <?php
}
?>
</select>
<select name="Rea2">
<option value="">Aucun</option>
<?php
foreach ($listR as $key => $valuer) {
    ?>
    <option value="<?php echo $valuer['id_real']; ?>"><?php echo $valuer['nom_real'].' '.$valuer['prenom_real']; ?></option>
    <?php
}
?>
</select>
</div>
<p onclick="popreal()">Créer Realisateur</p>


<button type="submit" name="ajout">Créer le film</button>

<button type="submit" name="annul">Annuler</button>
</form>
<!-- Ajouter Acteur -->
<form method="POST" class="hide" id="creaAct">
<input placeholder="nom" type="text" name="nom_act">
<input placeholder="prenom" type="text" name="prenom_act">
<input placeholder="age" type="number" name="age_act">
<input placeholder="nationalite" type="text" name="nation_act">
<input placeholder="photo" type="text" name="photo_act">

<button type="submit" name="ajout_act">Créer l'Acteur</button>

<button type="submit" name="annul_act">Annuler</button>
</form>
<!-- ajout real -->
<form method="POST" class="hide" id="creaReal">
<input placeholder="nom" type="text" name="nom_real">
<input placeholder="prenom" type="text" name="prenom_real">
<input placeholder="age" type="number" name="age_real">
<input placeholder="nationalite" type="text" name="nation_real">
<input placeholder="photo" type="text" name="photo_real">

<button type="submit" name="ajout_real">Créer le Réalisateur</button>

<button type="submit" name="annul_real">Annuler</button>
</form>

<!-- ajout genre -->
<form method="POST" class="hide" id="creaGenre">
<input placeholder="nom" type="text" name="nom_real">


<button type="submit" name="ajout_genre">Créer le genre</button>

<button type="submit" name="annul_genre">Annuler</button>
</form>
<p class="hide" id="closeAdm" onclick="closeAdm()">Fermer</p>
<?php
include 'footer.php';