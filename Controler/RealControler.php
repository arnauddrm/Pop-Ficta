<?php

require('Model/Real.php');
$cheminImg = 'asset/img/';
$id = $_GET['id'];
$real=getRealFilm($id);

require('View/RealView.php');