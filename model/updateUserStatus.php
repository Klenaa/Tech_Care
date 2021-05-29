<?php
session_start();
include('../model/connect.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modifier le statut d'un utilisateur</title>
        <link rel="stylesheet" href="../view/css/updateUserStatus.css"/>
    </head>
    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "header.php"); ?>
    <body>
        <div class="container">
            <?php
            $allUsers  = $bdd->query('SELECT email, userName AS nom, userSurname AS prenom, status AS statut FROM users ORDER BY nom')->fetchAll();
        //Donner l'option de faire le tri par nom, email...
            echo '<div class="container"><table>';
            echo '<thead><tr><th>Mail</th><th>Nom</th><th>Prenom</th><th>Statut</th></tr></thead>';

            foreach ($allUsers as $indexNumber=>$rowUser){
                $baseNameButton = "updateStatus";
                $baseNameSelect = "selectStatus";
                $baseNameDelete = "deleteUser";


                if(isset($_POST[$baseNameDelete.$indexNumber])){
                    header('Location:delete_user_post.php?mail=' . $rowUser['email']);
                }

                if(isset($_POST[$baseNameButton.$indexNumber])){
                    $statusSelected = htmlspecialchars($_POST[$baseNameSelect. $indexNumber]);
                    echo 'status selectionné : ' . $statusSelected;
                    $reqUpdate = $bdd->prepare('UPDATE users SET status=? WHERE email =?');
                    $reqUpdate->execute(array(
                            $statusSelected,
                            $rowUser['email']
                    ));

                    header('Location: updateUserStatus.php');

                }
                echo '<tr class="col">';//une ligne
                //echo "<td>" . $indexNumber . "</td>";
                echo "<td>" . $rowUser['email'] . "</td>";
                echo "<td>" . $rowUser['nom'] . "</td>";
                echo "<td>" . $rowUser['prenom'] . "</td>";
                echo "<td>" . $rowUser['statut'] . "</td>";
                echo  '<td><form method="post"><select name="' . $baseNameSelect. $indexNumber.'" id="' . $baseNameSelect. $indexNumber.'">
                        <option value="utilisateur">Utilisateur</option>
                        <option value="gestionnaire">Gestionnaire</option>
                        <option value="administrateur">Administrateur</option>
                        </select></td>';
                echo '<td><input type="submit" value="Modifier" name="' . $baseNameButton. $indexNumber.'"></form></td>';
                echo '<td><form method="post"><input type="submit" name="'.$baseNameDelete.$indexNumber.'" value="Supprimer"></form></td>';
                echo '</tr><br>';
            }
            echo '</table></div>';

            ?>

        </div>
    </body>
    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "footer.php");
    ?>
</html>
