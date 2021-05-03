<?php
//start session
session_start();
    require 'connect.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>S'inscrire</title>
    </head>
    <body>
        <h1>Register</h1>
        <form action="register_post.php" method="post">
            <label for="email">email</label>
            <input type="text" id="email" name="email"><br>

            <label for="userName">Nom</label>
            <input type="text" id="userName" name="userName"><br>

            <label for="userSurname">Prénom</label>
            <input type="text" id="userSurname" name="userSurname"><br>

            <label for="pass">Mot de passe</label>
            <input type="password" id="pass" name="pass"><br>



            <input type="submit" name="register" value="Register"></button>
        </form>
    </body>
</html>

<?
    //$register exist => registration form submitted
    
    //on récupère tout le contenu de la table users
    $reponse = $bdd->query('SELECT * FROM users'); //Contient toute la réponse de la requete

    //On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
        echo '<br>';
        echo 'Email : ' . htmlspecialchars($donnees['email']) . '  -  ';
        echo 'userName : ' . htmlspecialchars($donnees['userName']) . '  -  ';
        echo 'userSurname : ' . htmlspecialchars($donnees['userSurname']) . '  -  ';
        echo 'password : ' . htmlspecialchars($donnees['pass']) . '<br>';
    }
    $reponse->closeCursor(); //Termine le traitement de la requête
    
?>

