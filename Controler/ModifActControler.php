<?php

require('Model/ModifAct.php');
$cheminImg = "asset/img/";

$id = $_GET['id'];
$real = getModifReal($id);

require('View/ModifActView.php');