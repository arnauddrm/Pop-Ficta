<?php
require('env.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);



function getFilm($id)
{
global $dbh;

$film=$dbh->prepare("SELECT * FROM film WHERE id_film={$id}");
$film->execute();

$film=$film->fetchAll(pdo::FETCH_ASSOC);
return $film;
}

function getGenre($id){

    global $dbh;

    $genre=$dbh->prepare("SELECT * FROM film INNER JOIN type ON film.id_film=type.id_film INNER JOIN genre ON type.id_genre=genre.id_genre WHERE film.id_film={$id}");
    
    $genre->execute();
    
    $genre=$genre->fetchAll(pdo::FETCH_ASSOC);
    return $genre;



}
function getAct($id){
global $dbh;
$act=$dbh->prepare("SELECT * FROM film INNER JOIN jouer ON film.id_film = jouer.id_film INNER JOIN acteur ON jouer.id_acteur=acteur.id_acteur WHERE film.id_film = {$id}");
$act->execute();
$act=$act->fetchAll(pdo::FETCH_ASSOC);
return $act;

}

function getReal($id){
global $dbh;
$real=$dbh->prepare("SELECT * FROM film INNER JOIN realiser ON film.id_film = realiser.id_film INNER JOIN realisateur ON realiser.id_real=realisateur.id_real WHERE film.id_film = {$id}");
$real->execute();
$real=$real->fetchAll(pdo::FETCH_ASSOC);
return $real;


}