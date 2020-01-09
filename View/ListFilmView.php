<?php
$title = "Liste Films";
include 'header.php';


?>


<h2 class="title-rubrique">Les films</h2>
<table class="latable" id="blurBody">
    <tbody>
        <?php
        foreach ($film as $key => $value) :
            $date = $value['date_sortie_film'];
            $date = explode("-", $date);
            $newDate = $date[2] . "/" . $date[1] . "/" . $date[0];
            ?>
            <tr>

                <td class="taillecase-img"><a href="index.php?page=film&id=<?php echo $value['id_film']; ?>"><img class="imgfilm" src="<?php echo $cheminImg . $value['affiche_film'] ?>" alt=""> </a></td>

                <td class="taillecase"><a class="titrefilm" href="index.php?page=film&id=<?php echo $value['id_film']; ?>"> <?php echo $value['titre_film'] ?></a></td>

                <td class="taillecase"><a class="studiofilm" href="index.php?page=film&id=<?php echo $value['id_film']; ?>"> <?php echo $value['studio_film'] ?></a></td>
                <td class="taillecase"><a class="datesortiefilm" href="index.php?page=film&id=<?php echo $value['id_film']; ?>"> <?php echo $newDate ?></a></td>
                <td class="taillecase"><a class="dureefilm" href="index.php?page=film&id=<?php echo $value['id_film']; ?>"> <?php echo $value['duree_film'] ?></a></td>


                <?php
                    if (isset($_SESSION['role'])) {
                        if ($_SESSION['role'] = 1 || $_SESSION['role'] = 2) {
                            ?>
                        <td class="taillecase-ajout-suppr"><a class="ajout-suppr" href="index.php?page=AjoutFilm">Ajouter</a></td>
                <?php
                        }
                    }

                    ?>

                <?php
                    if (isset($_SESSION['role'])) {
                        if ($_SESSION['role'] = 1 || $_SESSION['role'] = 2) {
                            ?>
                        <td class="taillecase"><a class="ajout-suppr" href="index.php?page=suppFilm&id=<?php echo $value['id_film']; ?>">Supprimer</a></td>
                <?php
                        }
                    }
                    include 'footer.php';
                    ?>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>