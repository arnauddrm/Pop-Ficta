<?php

$title = "Liste Utilisateurs";
include 'header.php';

if (isset($_POST['ModifUser'])) {
    require('env.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

$ModUser = $dbh->prepare("UPDATE utilisateur SET role_utilisateur= {$_POST['roleUser']} WHERE id_utilisateur={$_POST['idUser']}");
    $ModUser->execute();

    $ModUser = $ModUser->fetchAll(PDO::FETCH_ASSOC);

    header('Location: index.php?page=ListUser');
}

if (isset($_POST['SuppUser'])) {
    require('env.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

$ModUser = $dbh->prepare("DELETE FROM `utilisateur` WHERE id_utilisateur={$_POST['idSuppUser']}");
    $ModUser->execute();

    $ModUser = $ModUser->fetchAll(PDO::FETCH_ASSOC);

    header('Location: index.php?page=ListUser');
}

?>

<table>
<thead>
    <th>Pseudo</th>
    <th>Role</th>
    <th>Option</th>
</thead>
<tbody>
<?php
    foreach ($all_User as $key => $value) :
        if ($value['role_utilisateur'] != 2) {

?>
<tr>
<td>
        <?php
        echo $value['pseudo_utilisateur'];
        ?>
        </td>
        <td>
        <form method="POST">
        <input type="hidden" name="idUser" value="<?php echo $value['id_utilisateur'];?>">
            <select name="roleUser">
                <option value="<?php echo $value['role_utilisateur'];?>">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <button name="ModifUser" type="submit">Modifier</button>
        </form>
        </td>
        <td>
        <form method="POST">
        <input type="hidden" name="idSuppUser" value="<?php echo $value['id_utilisateur'];?>">
            <button name="SuppUser" type="submit">Supprimer</button>
        </form>
        </td>
</tr>
<?php
    }
endforeach
?>
</tbody>
</table>

<?php

include 'footer.php';