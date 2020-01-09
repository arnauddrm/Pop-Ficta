<?php

// Permet de savoir s'il y a une session. 
// C'est à dire si un utilisateur c'est connecté à votre site 

require_once('env.php'); 

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

if(!empty($_POST)){
    extract($_POST);
    $valid = true;

    if (isset($_POST['connexion'])){
        $nom_co = htmlentities(strtolower(trim($nom)));
        $mdp_co = trim($mdp);

        if(empty($nom)){ // Vérification qu'il y est bien un nom de renseigné
            $valid = false;
            $er_nom_co = "Il faut mettre un nom";
        }

        if(empty($mdp)){ // Vérification qu'il y est bien un mot de passe de renseigné
            $valid = false;
            $er_mdp_co = "Il faut mettre un mot de passe";
        }

        // On fait une requête pour savoir si le couple nom / mot de passe existe bien car le nom est unique !
        $req = $dbh->query("SELECT * FROM utilisateur WHERE pseudo_utilisateur = '{$nom}' AND mdp_utilisateur = '{$mdp}'");
        $req = $req->fetch(PDO::FETCH_ASSOC);
        // Si on a pas de résultat alors c'est qu'il n'y a pas d'utilisateur correspondant au couple nom / mot de passe
        if ($req['id_utilisateur'] == ""){
            $valid = false;
            $er_nom_co = "Le nom ou le mot de passe est incorrecte";
        }

        // S'il y a un résultat alors on va charger la SESSION de l'utilisateur en utilisant les variables $_SESSION
        if ($valid){
            $_SESSION['id_utilisateur'] = $req['id_utilisateur']; // id de l'utilisateur unique pour les requêtes futures
            $_SESSION['pseudo'] = $req['pseudo_utilisateur'];
            $_SESSION['role'] = $req['role_utilisateur'];
            

            header('Location: index.php');
            exit;
        }   
    }
}

?>

<div id="pop_co" class="hide">
<form class="style_form g-container grid-5 rows-12 m-a test" method="POST">
<?php
    if (isset($er_nom_co)){
?>
<div><?= $er_nom_co ?></div>
<?php   
    }
?>
    <input class="c2-3 r8-1 gg space_hor style_input" name="nom" type="text" placeholder="Pseudo" value="<?php if(isset($nom_co)){ echo $nom_co; }?>" required>
<?php
    if (isset($er_mdp_co)){
?>
<div><?= $er_mdp_co ?></div>
<?php   
    }
?>
    <input class="c2-3 r9-1 gg space_hor style_input" name="mdp" type="password" placeholder="Mot de passe" value="<?php if(isset($mdp_co)){ echo $mdp_co; }?>" required>

    <button class="c3-1 r10-1 gg space_hor style_submit" type="submit" name="connexion">Se connecter</button>
    
</form>
</div>