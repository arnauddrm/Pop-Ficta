<?php

require('Model/ModifReal.php');
$cheminImg = "asset/img/";

$id = $_GET['id'];
$real = getModifReal($id);

require('View/ModifRealView.php');