<?php

require('Model/suppAct.php');
$cheminImg = "asset/img/";
$id = $_GET['id'];

if (isset($_POST['oui'])) {
    $supprim = supprReal($id);
    header('Location: index.php?page=ListAct');
}
if (isset($_POST['non'])) {
    header('Location: index.php?page=ListAct');
}

require('View/suppActView.php');