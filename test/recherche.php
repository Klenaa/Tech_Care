<?php
    require '../model/connect.php';
    include 'function.php';

    if(isset($_POST['chercher'])){
        echo 'la recheche est ', $_POST['recherche'] ;
        $recherche = $_POST['recherche'];
        if ($recherche == ""||$recherche == "%"){
            echo " Veuillez rentrer un nom d'utilisateur. ";
        }else{
            echo ' résultat de la recherche ';
            $rep = researchUser($bdd,$recherche);

            foreach ($rep as $indexNumber=>$rowUser){
                echo "<td>" . $rowUser['userName'] . "</td>";
                echo "<td>" . $rowUser['userSurname'] . "</td>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Editer le profil</title>
    </head>
    <body>
        <?php
        $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
        include($IPATH . "header.php"); ?>

        <form method='post'>
            <input type='text'  id='recherche' name='recherche' placeholder="Rechercher un utilisateur">
            <input type='submit' name='chercher' value='chercher' >
        </form>
        <div>
            <?php
            $allUsers  = userInformation($bdd);
            foreach ($allUsers as $indexNumber=>$rowUser){
                echo "<form method='post'> 
                          <button type='submit' name='". $indexNumber."' valeur='Afficher' style='background: none;border: none;font-size: 20px;'>
                               <td>" . $rowUser['userName'] . " " . $rowUser['userSurname'] . "</td> <br>
                          </button>
                      </form>";
                if (isset($_POST[$indexNumber])) {
                    header('Location:recherche.php?mail=' . $rowUser['email']);
                }
            }
            ?>
        </div>
        <div>
            <?php
            if(isset($_GET['mail'])){
                echo $_GET['mail'];
                $_GET['mail'] = htmlspecialchars($_GET['mail']);
                $email = strip_tags($_GET['mail']);
                $profil = donner($bdd,$email);
                if(isset($profil)){
                    echo '<fieldset">
                                <article class="colone">
                                    <p>'.$profil['userName'].'</p>
                                    <p>'.$profil['userSurname'].'</p>
                                    <p>'.$profil['email'].'</p>
                                    <p>'.$profil['status'].'</p>
                
                                    <div class="aligne">
                                        <form method="post">
                                            <button type="submit" name="supprimer" value="Confirmer" onClick="Confirmer()" style="background: none;border: none">Supprimer l\'utilisateur</button><br>
                                        </form>
                                    </div>
                                </article>
                            </fieldset>';
                }
            }
            ?>
        </div>

        <?php
        $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
        include($IPATH . "footer.php");
        ?>
    </body>
</html>




