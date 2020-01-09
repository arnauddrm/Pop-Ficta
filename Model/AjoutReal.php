<?php
require('env.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

function ajoutReal($nom, $prenom, $age, $nation, $photo){
    global $dbh;

    $ajout = $dbh->prepare("INSERT INTO realisateur (nom_real, prenom_real, age_real, nationalite_real, photo_real) VALUES (?, ?, ?, ?, ?)");
    $ajout->execute(array($nom, $prenom, $age, $nation, $photo));
    
    return $ajout;
}