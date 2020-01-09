<?php
require('env.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

function getRealFilm($id)
{
global $dbh;

$id=$_GET ['id'];
$Real=$dbh->prepare("SELECT  * FROM realisateur INNER JOIN realiser ON realisateur.id_real=realiser.id_real INNER JOIN film ON realiser.id_film=film.id_film WHERE realisateur.id_real={$id}");
$Real->execute();

$Real=$Real->fetchAll(pdo::FETCH_ASSOC);
return $Real;


}