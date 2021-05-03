<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../view/signUp.css"/>
        <title>S'inscrire</title>
    </head>
    <main>

    <?php
    echo 'hello';

    //connexion bdd
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=db;port=3307;', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    echo 'hello';
    ?>


    <form action="signUp_post.php" method="post" class="signup">
    <div class="container">
        <h2>Créer un compte</h2>
        <p>Veuillez remplir les champs ci-dessous pour créer votre compte.</p>
        <hr>
        <label for="lastname"><b>Nom</b></label>
        <input type="text" name=" member_name" id="lastname" placeholder="Entrez votre nom" required>

        <label for="name"><b>Prénom</b></label>
        <input type="text" name="member_surname" id="name" placeholder="Entrez votre prénom" required>

        <label for="email"><b>E-mail</b></label>
        <input type="text" name="member_mail" id="email" placeholder="Entrez votre e-mail" required>

        <label for="password"><b>Mot de passe</b></label>
        <input type="password" name="member_password" id="password" placeholder="Entrez votre mot de passe" required>

        <label for="repeatpassword"><b>Confirmation du mot de passe</b></label>
        <input type="password" name="repeat_member_password" id="repeatpassword" placeholder="Confirmez votre mot mot de passe" required>

        <label>
            <input type="checkbox" name="connected" id="connected"> Rester connecté
        </label>

        <label>
            <input type="checkbox" name="conditions" id="conditions"> Je déclare accepter les <a href="cgu.html" style="color:dodgerblue">Conditions Générales d'Utilisation</a>
        </label>

        <div class="button">
            <button type="button" class="cancelbtn">Annuler</button>
            <button type="button" class="signupbtn">S'inscrire</button>
        </div>
    </div>
</form>

<?php
        
//ça marche pas : cryptage mdp
        //Vérification de la validité des informations

        //Hachage du mot de passe
        $pass_hache = password_hash($_POST[test_password], PASSWORD_DEFAULT);

        //Insertion
        $req = $bdd->prepare('INSERT INTO testuser(test_mail, test_name, test_surname, test_birthday, test_password) VALUES(:test_mail, :test_name, :test_surname, :test_birthday, CURDATE())')

        $req->execute(array(
            'test_mail' => $test_mail,
            'test_name' => $test_name,
            'test_surname' => $test_surname,
            'test_birthday' => $test_birthday,
            'test_password' => $pass_hache));

        ?>
        

    </main>


</html>