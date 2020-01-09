<?php
// $titredufilm = $value['titre_film'];
?>
<!-- <title><?php echo $titredufilm; ?></title> -->
<?php
// $title = echo $value['titre_film'];
?>



<?php
$title = "FILMS";
include 'header.php';

foreach ($film as $key => $value)

/* Mise en ordre de la date au bon format (jj/mm/aaaa) */
$date = $value['date_sortie_film'];
$date = explode("-", $date);
$newDate = $date[2] . "/" . $date[1] . "/" . $date[0];
?>


<div class="contenu-film">
    <img class="img-film" src="<?php echo $cheminImg . $value['affiche_film']; ?>" alt="Affiche du film ">

    <div class="info-film">
        <p class="titre-film"><?php echo $value['titre_film'] ?></p>

        <div class="first-info">
            <p class="datesortie-film"><?php echo $newDate; ?></p> 
            <p class="genre-film">
                <?php
                $i = 1;
                foreach ($genre as $key_genre => $value_genre) {
                    $megagenre = $value_genre['type_genre'];
                    if ($i < count($genre)) {
                        echo $megagenre . ", ";
                    } else {
                        echo $megagenre;
                    }
                    $i++;
                }
                ?>   
            </p> 
            <p class="duree-film">Durée : <?php echo $value['duree_film'];?> </p>
        </div>
        <p class="age-film">Limite d'âge : <?php echo $value['pegi_film']; ?>+</p>
        
        <p class="sous-titre-film">Réalisateur :</p>
         <p class="real-film">
                <?php
            $i = 1;
            foreach ($real as $key_real => $value_real) {
                $realisateur = $value_real['prenom_real'] . " " . $value_real['nom_real'];
                if ($i < count($real)) {
            ?>
            <a href="index.php?page=real&id=<?php echo $value_real['id_real']; ?>"><?php echo $realisateur . ", "; ?></a>

            <?php
                } else {
            ?>
            <a href="index.php?page=real&id=<?php echo $value_real['id_real']; ?>"><?php echo $realisateur; ?></a>
            <?php                    }
                $i++;
                }
            ?> 
         </p>


        <p class="sous-titre-film">Acteurs : </p>

        <p class="acteurs-film"> <?php
                $i = 1;
                foreach ($act as $key_act => $value_act) {
                    $acteur = $value_act['prenom_acteur'] . " " . $value_act['nom_acteur'];
                    if ($i < count($act)) {
            ?>

            <a class="acteurs-films" href="index.php?page=Act&id=<?php echo $value_act['id_acteur']; ?>"> <?php
            echo $acteur . " | "; ?></a>
            <?php } else {
            ?>
            <a class="acteurs-films" href="index.php?page=Act&id=<?php echo $value_act['id_acteur']; ?>"> 
            <?php
            echo $acteur; ?></a><?php
            }
            $i++;
            } 
            ?>   
        </p>
        
        <p class="sous-titre-film">Synopsis :</p>

        <p class="synopsis-film"><?php echo $value['synopsis_film']; ?></p>
    </div>
</div>

<hr>

<div class="div-ba">
    <h2 class="titleba">Bande-annonce</h2>
</div>
<div class="div-video">

    <?php
    $video = explode('/', $value['bande_film']);
    $watch = explode('=', $video[3]);
    $newVideo = $video[0] . "//" . $video[2] . "/embed" . "/" . $watch[1];
    ?>

    <iframe class="videofilm" src="<?php echo $newVideo; ?>"></iframe>
</div>
<?php

include 'footer.php';
?>