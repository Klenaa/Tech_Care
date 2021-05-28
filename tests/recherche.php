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
        $rep = $db->query('SELECT distinct userName, userSurname FROM users WHERE userName LIKE "%$recherche%" OR userSurname LIKE "%$recherche%"');
        //echo ' résultat de la recherche ' . $rep['userName'] . $rep['userSurname'];

        while ($donnees = $rep->fetch()) {
            echo $donnees['userName'] . $donnees['userSurname'] . '<br />';
        }
        $rep->closeCursor();
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

    </body>
</html>