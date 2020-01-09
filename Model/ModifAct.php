<?php

require('env.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

function getModifReal($id){
    global $dbh;

$modif_Real = $dbh->prepare("SELECT * FROM acteur WHERE acteur.id_acteur = {$id}");
    $modif_Real->execute();

    $modif_Real = $modif_Real->fetchAll(PDO::FETCH_ASSOC);

    return $modif_Real;
}

