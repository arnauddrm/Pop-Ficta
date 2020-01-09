<?php

require('Model/suppFilm.php');
$cheminImg = "asset/img/";
$id = $_GET['id'];

if (isset($_POST['oui'])) {
    $supprim = supprReal($id);
    header('Location: index.php?page=ListFilm');
}
if (isset($_POST['non'])) {
    header('Location: index.php?page=ListFilm');
}

require('View/suppFilmView.php');