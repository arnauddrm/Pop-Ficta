<?php

$title = "Accueil";
include 'header.php';
$num = 1;

?>

<!-- <audio class="pop" src="https://freesound.org/data/previews/244/244654_3624044-lq.mp3"></audio>
<audio class="pop" src="https://freesound.org/data/previews/411/411642_5121236-lq.mp3"></audio>
<audio class="pop" src="https://freesound.org/data/previews/245/245645_1038806-lq.mp3"></audio> -->

<div class="slideshow abso" id="blurBody">
    <ul>
        
<?php

foreach ($test as $key => $value) {
    if ($num < 6) {
        $date = $value['date_sortie_film'];
        $date = explode("-", $date);
        $newDate = $date[2] . "/" . $date[1] . "/" . $date[0];
        ?>

        <li> <img class="img_carou" src="<?php echo $cheminImg . $value['affiche_film']; ?>" alt=""></li>
        <!-- <span>Descripti</span> -->
        <!-- Span -> description en bas du carousel, mettre des notes en étoiles si possible -->
<?php
    }
    $num++;
}

?>
 </ul>
    <!-- <div class="barre_progression"></div> -->
</div>

<?php

include 'footer.php';

