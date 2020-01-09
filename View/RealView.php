<?php
    $title = "RÉALISATEURS";
    include 'header.php';

    foreach ($real as $key => $value) {

    /* Mise en ordre de la date au bon format (jj/mm/aaaa) */
    $date = $value['date_sortie_film'];
    $date = explode("-", $date);
    $newDateFilmo = $date[0];
?>

<div class="contenu-act">
    <img class="img-act" src="<?php echo $cheminImg.$value['photo_real'];?>" alt="photo de <?php echo $value['nom_real']. $value['prenom_real']; ?>">

    <div class="info-act">
        <p class="nom-act"><?php echo $value['prenom_real'].'   '.$value['nom_real']; ?></p>

        <div class="div-age">
            <p class="sous-titre-act-age">Âge : </p>
            <p class="age-act"><?php echo $value['age_real'] . " "; ?> ans</p>  
        </div>
        
        <div class="div-natio">
            <p class="sous-titre-act-natio">Nationalité : </p> 
            <p class="natio-act"><?php echo $value['nationalite_real']; ?></p>  
        </div>

        <hr class="hr-act">   

        <p class="sous-titre-act-filmo">Filmographie : </p> 

        <div class="div-filmo">
         <a href="index.php?page=film&id=<?php echo $value['id_film']; ?>"><img class="imgfilm-filmo" src="<?php echo $cheminImg . $value['affiche_film']; ?>" alt="Affiche du film <?php echo $value['titre_film']; ?>"></a>
    
        <p><a class="titrefilm-filmo" href="index.php?page=film&id=<?php echo $value['id_film']; ?>">
            <?php echo $value['titre_film']  ?></a>
        </p>

        <p class="date-filmo"><?php echo $newDateFilmo; ?></p>   
        </div>
 
    </div>
</div>

<?php
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
    ?>
            <!-- <a href="index.php?page=ModifAct&id=<?php echo $value['id_acteur']; ?>">Modifier</a>
            <a href="index.php?page=ModifAct&id=<?php echo $value['id_acteur']; ?>">Supprimer</a> -->
    <?php
            }
        }
        ?>
    </div>


<?php
}
include 'footer.php'; 