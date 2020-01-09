<?php

require('Model/AjoutReal.php');
$cheminImg = "asset/img/";

if (isset($_POST['ajout'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $nation = $_POST['nation'];
    $image = $_FILES['affiche']['name'];
    if (move_uploaded_file($_FILES['affiche']['tmp_name'], $cheminImg.$image)) {
    $creaReal = ajoutReal($nom, $prenom, $age, $nation, $image);
    header('Location: index.php?page=ListReal');
    }
}
if (isset($_POST['annul'])) {
    header('Location: index.php?page=ListReal');
}

require('View/AjoutRealView.php');