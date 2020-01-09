

<?php

require('env.php');

//Uncomment the section below to connect to database, once env.php has been filled.
$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);


//Function returning all columns from a table in your database.
function getAllreal(){
    global $dbh;

    $all_real = $dbh->prepare('SELECT * FROM realisateur');
    $all_real->execute();

    $all_real = $all_real->fetchAll(PDO::FETCH_ASSOC);

    return $all_real;
}