<?php
$title= "";
include 'header.php';
require('env.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
if (isset($_POST['modifier'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $nation = $_POST['nation'];
    $photo = $_POST['photo'];
    
    $modifRealNoFilm = $dbh->prepare("UPDATE acteur SET nom_acteur=?, prenom_acteur=?, age_acteur=?, nationalite_acteur=?, photo_acteur=? WHERE id_acteur={$id}");
    $modifRealNoFilm->execute(array($nom, $prenom, $age, $nation, $photo));
    header('Location: index.php?page=ModifAct&id='.$id);
}
?>
<form method="POST">

<?php
foreach ($real as $key => $value) {    
?>
<input name="nom" type="text" value="<?php echo $value['nom_acteur']; ?>">
<input name="prenom" type="text" value="<?php echo $value['prenom_acteur']; ?>">
<input name="age" type="text" value="<?php echo $value['age_acteur']; ?>">
<input name="nation" type="text" value="<?php echo $value['nationalite_acteur']; ?>">
<input name="photo" type="text" value="<?php echo $value['photo_acteur']; ?>">

<?php
}
?>
<button type="submit" name="modifier">Modiffier</button>
</form>




<?php
include 'footer.php';
?>