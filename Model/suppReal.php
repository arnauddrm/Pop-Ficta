<?php
require('env.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

function supprReal($id){
    global $dbh;
    $suppr = $dbh->prepare("DELETE realisateur FROM realisateur WHERE realisateur.id_real={$id}");
    $suppr->execute();
    $delien = $dbh->prepare("DELETE realiser FROM realiser WHERE realiser.id_real={$id}");
    $delien->execute();
    return $suppr;
}