<?php
$title = "Liste Réalisateurs";
include 'header.php';
?>


<h2 class="title-rubrique">Les Réalisateurs</h2>
<table class="latable" id="blurBody">
    <tbody>
        <?php
        foreach ($allreal as $key => $value) :
            ?>
            <tr>

                <td class="taillecase-img"><a href="index.php?page=real&id=<?php echo $value['id_real']; ?>"><img class="imgfilm" src="<?php echo $cheminImg . $value['photo_real'] ?>" alt=""> </a></td>

                <td class="taillecase-act"><a class="titrefilm" href="index.php?page=real&id=<?php echo $value['id_real']; ?>"> <?php echo $value['nom_real'] ?></a></td>

                <td class="taillecase-act"><a class="titrefilm" href="index.php?page=real&id=<?php echo $value['id_real']; ?>"> <?php echo $value['prenom_real'] ?></a></td>

                <?php
                    if (isset($_SESSION['role'])) {
                        if ($_SESSION['role'] = 1 || $_SESSION['role'] = 2) {
                            ?>
                       <td class="taillecase-ajout-suppr2"><a class="ajout-suppr" href="index.php?page=AjoutReal">Ajouter</a></td> 
                <?php
                        }
                    }
                    
                    ?>

                <?php
                    if (isset($_SESSION['role'])) {
                        if ($_SESSION['role'] = 1 || $_SESSION['role'] = 2) {
                            ?>
                        <td class="taillecase-ajout-suppr"><a class="ajout-suppr" href="index.php?page=suppReal&id=<?php echo $value['id_real']; ?>">Supprimer</a></td>
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