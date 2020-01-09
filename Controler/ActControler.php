<?php

require('Model/Act.php');
$cheminImg = "asset/img/";

$id = $_GET['id'];
$ActFilm = getActFilm($id);
require('View/ActView.php');