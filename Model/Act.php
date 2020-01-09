<?php

require('env.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

function getActFilm($id){
    global $dbh;

    $ActFilm = $dbh->prepare("SELECT * FROM acteur INNER JOIN jouer ON acteur.id_acteur = jouer.id_acteur INNER JOIN film ON jouer.id_film = film.id_film WHERE acteur.id_acteur = {$id}");
    $ActFilm->execute();

    $ActFilm = $ActFilm->fetchAll(PDO::FETCH_ASSOC);
    return $ActFilm;
}