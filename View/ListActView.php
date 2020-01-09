<?php
$title = "Liste Acteurs";
include 'header.php';
?>

<h2 class="title-rubrique">Les Acteurs</h2>
<table class="latable" id="blurBody">
    <tbody>
        <?php
        foreach ($Acts as $key => $value) :
            ?>
            <tr>

                <td class="taillecase-img"><a href="index.php?page=Act&id=<?php echo $value['id_acteur']; ?>"><img class="imgfilm" 
                src="<?php echo $cheminImg . $value['photo_acteur']; ?>" alt=""></a></td>

                <td class="taillecase-act"><a class="titrefilm" href="index.php?page=Act&id=<?php echo $value['id_acteur']; ?>"><?php echo $value['prenom_acteur']; ?></a></td>

                <td class="taillecase-act"><a class="titrefilm" href="index.php?page=Act&id=<?php echo $value['id_acteur']; ?>"><?php echo $value['nom_acteur']; ?></a></td>

                <?php
                    if (isset($_SESSION['role'])) {
                        if ($_SESSION['role'] = 1 || $_SESSION['role'] = 2) {
                            ?>
                        <td class="taillecase-ajout-suppr2"><a class="ajout-suppr" href="index.php?page=AjoutAct">Ajouter</a></td>
                <?php
                        }
                    }

                    ?>

                <?php
                    if (isset($_SESSION['role'])) {
                        if ($_SESSION['role'] = 1 || $_SESSION['role'] = 2) {
                            ?>
                        <td class="taillecase-ajout-suppr"><a class="ajout-suppr" href="index.php?page=suppAct&id=<?php echo $value['id_acteur']; ?>">Supprimer</a></td>
                <?php
                        }
                    }
                    ?>

            </tr>
        <?php
        endforeach;
        ?>

    </tbody>

</table>
<?php
        include 'footer.php';