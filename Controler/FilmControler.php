<?php

require('Model/Film.php');
$cheminImg = "asset/img/";
$id = $_GET['id'];
$film=getFilm($id);
$genre=getGenre($id);
$act=getAct($id);
$real=getReal($id);



require('View/FilmView.php');