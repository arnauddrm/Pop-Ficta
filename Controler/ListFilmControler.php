<?php

require('Model/ListFilm.php');

$cheminImg = "asset/img/";

$film=getAllFilm();


require('View/ListFilmView.php');