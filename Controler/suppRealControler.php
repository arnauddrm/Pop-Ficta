<?php

require('Model/suppReal.php');
$cheminImg = "asset/img/";
$id = $_GET['id'];

if (isset($_POST['oui'])) {
    $supprim = supprReal($id);
    header('Location: index.php?page=ListReal');
}
if (isset($_POST['non'])) {
    header('Location: index.php?page=ListReal');
}

require('View/suppRealView.php');