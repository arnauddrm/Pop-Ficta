<?php

require('Model/ListAct.php');
$cheminImg = "asset/img/";

$Acts = getAllAct();

require('View/ListActView.php');