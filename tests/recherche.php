<?php
session_start();
//On se connecte à la basse de donnés
$user = 'root';
$pass = 'root';
try{
    $db = new PDO('mysql:host=localhost;dbname=db;port=3307;',$user,$pass);
    foreach ($db->query('SELECT * FROM users') as $row) {
        //print_r($row); //afficher tous les données de la table
    }
}catch(PDOExecption $e){
    print"Erreur:" . $e->getMessage() . "<br/>"; //Message d'erreur
    die;
}
if(isset($_POST['chercher'])){
    echo 'la recheche est ', $_POST['recherche'] ;
    $recherche = $_POST['recherche'];
    if ($recherche == ""||$recherche == "%"){
        echo " Veuillez rentrer un nom d'utilisateur. ";
    }else{
        echo ' résultat de la recherche ';
        $rep = $db->prepare('SELECT userName, userSurname FROM users WHERE userName LIKE ? OR userSurname LIKE ?');
        $rep->execute(array("%".$recherche."%","%".$recherche."%"));

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
        <form method='post'>
            <input type='text'  id='recherche' name='recherche' placeholder="Rechercher un utilisateur">
            <input type='submit' name='chercher' value='chercher' >
        </form>
        <div>
            <?php
            $allUsers  = $db->query('SELECT email, userName AS nom, userSurname AS prenom, status AS statut FROM users ORDER BY nom')->fetchAll();
            foreach ($allUsers as $indexNumber=>$rowUser){
                $email = $rowUser['email'];
                echo "<form method='post'> 
                          <button type='submit' name='afficher' valeur=$email style='background: none;border: none;font-size: 20px;'>
                               <td>" . $rowUser['nom'] . " " . $rowUser['prenom'] . "</td> <br>
                          </button>
                      </form>";

                if(isset($_POST['afficher'])){
                    $profil = $db->prepare('SELECT * FROM users WHERE email = ?');
                    $profil->execute(array($rowUser['email']));
                    $profil = $profil->fetch();
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
            }

            ?>
        </div>
        <div>
            <?php

            ?>
        </div>
    </body>
</html>



