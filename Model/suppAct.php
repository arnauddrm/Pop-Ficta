<?php
require('env.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

function supprReal($id){
    global $dbh;
    $suppr = $dbh->prepare("DELETE acteur FROM acteur WHERE acteur.id_acteur={$id}");
    $suppr->execute();
    $delien = $dbh->prepare("DELETE jouer FROM jouer WHERE jouer.id_acteur={$id}");
    $delien->execute();
    return $suppr;
}