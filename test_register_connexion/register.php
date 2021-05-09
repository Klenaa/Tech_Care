<?php

    require 'connect.php';
    include('config.php');

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>S'inscrire</title>
        <link rel="stylesheet" href="../view/css/register.css"/>
    </head>
    <body>
        <h1>S'inscrire</h1>
        <div class="separator"></div>
        <broly>
            <form action="register_post.php" method="post">
                <div class="contenant">
                    <!--Information obligatoires à l'inscription-->
                    <div class="element-form">
                        <label for="email">email</label>
                        <input type="email" id="email" name="email" required maxlength="50" placeholder="email"><br>

                        <label for="userName">Nom</label>
                        <input type="text" id="userName" name="userName" required maxlength="50" placeholder="Nom"><br>

                        <label for="userSurname">Prénom</label>
                        <input type="text" id="userSurname" name="userSurname" required maxlength="50" placeholder="Prénom"><br>

                        <label>Type d'utilisateur</label>
                        <select name="status" id="status" required>
                            <option value="utilisateur">Utilisateur</option>
                            <option value="gestionnaire">Gestionnaire (médecin)</option>
                        </select>

                        <label for="verificationCode">Entrer le code de vérification</label>
                        <input type="password" id="verificationCode" name="verificationCode" required maxlength="50" placeholder="Code de vérification"><br>


                        <label for="pass">Mot de passe</label>
                        <input type="password" id="pass" name="pass" required maxlength="50" placeholder="Mot de passe"><br>

                        <label for="pass2">Confirmer votre mot de passe</label>
                        <input type="password" id="pass2" name="pass2" required maxlength="50" placeholder="Confirmation mot de passe"><br>
                    </div>

                    <!--Information non obligatoires à l'inscription-->
                    <div class="element-form">
                        <label for="birthday">Date de naissance</label>
                        <div class="multipleChoice">
                            <input type="date" id="birthday" name="birthday"><br>
                        </div>

                        <label for="gender">Genre</label>
                        <div class="multipleChoice">
                            <input type="radio" id="birthdayH" name="gender" value="homme"><label for="birthdayH">Homme</label>
                            <input type="radio" id="birthdayF" name="gender" value="femme"><label for="birthdayF">Femme</label><br>
                        </div>

                        <label for="address">Adresse</label>
                        <input type="text" id="address" name="address" maxlength="70" placeholder="Adresse"><br>

                        <label for="postalCode">Code Postal</label>
                        <input type="text" pattern="[0-9]{5}" id="postalCode" name="postalCode" placeholder="75001"><br>

                        <label for="city">Ville</label>
                        <input type="text" id="city" name="city" placeholder="Ville"><br>

                        <label for="country">Pays</label>
                        <select name="country" id="country">
                            <option value="france">France</option>
                            <option value="angleterre">Angleterre</option>
                            <option value="allemagne">Allemagne</option>
                            <option value="espagne">Espagne</option>
                            <option value="usa">USA</option>
                            <option value="chine">Chine</option>
                            <option value="japon">Japon</option>
                        </select>

                        <label for="profession">Profession</label>
                        <input type="text" id="profession" name="profession" placeholder="profession"><br>


                    </div>


                </div>
                <div class="multipleChoice">
                    <input type="checkbox" name="conditions" id="conditions" required><label>Je déclare accepter les <a href="../view/html/cgu.php" style="color:dodgerblue">Conditions Générales d'Utilisation</a>
                    </label>
                </div>
                <script type="text/javascript" src="validatePassword.js"></script>
                <button type="submit" id="register" name="register" value="Register" maxlength="50" onclick="return Validate()">S'inscrire</button>
            </form>
        </broly>
        <?php
            $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
            include($IPATH . "footer.php");
        ?>
    </body>
</html>

<?

    //$register exist => registration form submitted
    //on récupère tout le contenu de la table users (pour vérifier le contenu de la bdd)
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

