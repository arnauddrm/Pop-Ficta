<?php

require('env.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

function getAllAct(){
    global $dbh;

    $all_Act = $dbh->prepare('SELECT * FROM acteur');
    $all_Act->execute();

    $all_Act = $all_Act->fetchAll(PDO::FETCH_ASSOC);

    return $all_Act;
}