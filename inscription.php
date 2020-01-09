<?php

  require_once('env.php'); 

  $dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
  $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
  

  // Si la variable "$_Post" contient des informations alors on les traitres
  if(!empty($_POST)){
      extract($_POST);
      $valid = true;

      // On se place sur le bon formulaire grâce au "name" de la balise "input"
      if (isset($_POST['inscription'])){
          $nom  = htmlentities(strtolower(trim($nom))); // On récupère le nom
          $mdp = trim($mdp); // On récupère le mot de passe 
          $confmdp = trim($confmdp); //  On récupère la confirmation du mot de passe

          //  Vérification du nom
          if(empty($nom)){
              $valid = false;
              $er_nom = ("Le nom d' utilisateur ne peut pas être vide");
          }       

          else{
              // On vérifit que le nom est disponible
              $req_nom = $dbh->query("SELECT pseudo_utilisateur FROM utilisateur");
              $req_nom = $req_nom->fetch();

              if ($req_nom['pseudo_utilisateur'] === $nom){
                  $valid = false;
                  $er_nom = "Ce nom existe déjà";
              }
          }

          // Vérification du mot de passe
          if(empty($mdp)) {
              $valid = false;
              $er_mdp = "Le mot de passe ne peut pas être vide";

          }elseif($mdp != $confmdp){
              $valid = false;
              $er_mdp = "La confirmation du mot de passe ne correspond pas";
          }

          // Si toutes les conditions sont remplies alors on fait le traitement
          if($valid){

              $role = 0;

              // On insert nos données dans la table utilisateur
              $new_nom = $dbh->prepare("INSERT INTO utilisateur (pseudo_utilisateur, mdp_utilisateur, role_utilisateur) VALUES ('{$nom}', '{$mdp}', '{$role}')");
              $new_nom->execute();
                  header('Location: index.php?=home');
                  exit;
          }
      }
  }
?>

<img src="asset/elements/croix.png" class="gg space_hor style_submit style-croix hide" onclick="close_popAuth()" id="close_pop" alt="bouton annuler">

<div id="pop_insc" class="hide">
<form method="POST" class="style_form g-container grid-5 rows-12 m-a">
<input class="c2-3 r8-1 gg space_hor style_input" name="nom" type="text" placeholder="Pseudo"  value="<?php if(isset($nom)){ echo $nom; }?>">
<input class="c2-3 r9-1 gg space_hor style_input" name="mdp" type="password" placeholder="Mot de passe"  value="<?php if(isset($mdp)){ echo $mdp; }?>">
<input class="c2-3 r10-1 gg space_hor style_input" name="confmdp" type="password" placeholder="Comfirmation mot de passe">
<button class="c3-1 r11-1 gg space_hor style_submit" type="submit" name="inscription">S'inscrire</button>
</form>
</div>