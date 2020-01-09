<?php

require('env.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

function getAllUser(){
    global $dbh;

    $all_User = $dbh->prepare('SELECT * FROM utilisateur');
    $all_User->execute();

    $all_User = $all_User->fetchAll(PDO::FETCH_ASSOC);

    return $all_User;
}