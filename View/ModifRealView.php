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
    
    $modifRealNoFilm = $dbh->prepare("UPDATE realisateur SET nom_real=?, prenom_real=?, age_real=?, nationalite_real=?, photo_real=? WHERE id_real={$id}");
    $modifRealNoFilm->execute(array($nom, $prenom, $age, $nation, $photo));
    header('Location: index.php?page=ModifReal&id='.$id);
}

?>
<form method="POST">

<?php
foreach ($real as $key => $value) {    
?>
<input name="nom" type="text" value="<?php echo $value['nom_real']; ?>">
<input name="prenom" type="text" value="<?php echo $value['prenom_real']; ?>">
<input name="age" type="text" value="<?php echo $value['age_real']; ?>">
<input name="nation" type="text" value="<?php echo $value['nationalite_real']; ?>">
<input name="photo" type="text" value="<?php echo $value['photo_real']; ?>">

<?php
}
?>
<button type="submit" name="modifier">Modiffier</button>
</form>

<?php
include 'footer.php';
?>