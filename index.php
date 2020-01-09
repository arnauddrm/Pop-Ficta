<?php

if(isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];
}

else {
    $page = 'Home';
}

$page = ucfirst($page);

include('Controler/'.$page.'Controler.php');