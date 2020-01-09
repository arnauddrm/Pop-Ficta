<?php

require('env.php');

//Uncomment the section below to connect to database, once env.php has been filled.
$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);


//Function returning all columns from a table in your database.
function getLastFilm(){
    global $dbh;

    $all_repos = $dbh->prepare('SELECT * FROM film INNER JOIN realiser ON realiser.id_film=film.id_film INNER JOIN realisateur ON realisateur.id_real=realiser.id_real ORDER BY date_sortie_film DESC');
    $all_repos->execute();

    $all_repos = $all_repos->fetchAll(PDO::FETCH_ASSOC);

    return $all_repos;
}