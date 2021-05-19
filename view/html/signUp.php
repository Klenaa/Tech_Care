<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="signUp.css"/>
    <link rel="stylesheet" href="header.css"/>
    <title>S'inscrire</title>
</head>
<body>

<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "header.php"); ?>

<form action="#" method="post" class="signup">
    <div class="container">
        <h2>Créer un compte</h2>
        <p>Veuillez remplir les champs ci-dessous pour créer votre compte.</p>
        <hr>
        <label for="lastname"><b>Nom</b></label>
        <input type="text" name="lastname" id="lastname" placeholder="Entrez votre nom" required>

        <label for="name"><b>Prénom</b></label>
        <input type="text" name="name" id="name" placeholder="Entrez votre prénom" required>

        <label for="birthday"><b>Date de naissance</b></label>
        <input type="text" name="birthday" id="birthday" placeholder="Entrez votre date de naissance" required>

        <label for="email"><b>E-mail</b></label>
        <input type="text" name="email" id="email" placeholder="Entrez votre e-mail" required>

        <label for="email"><b>Code de validation</b></label>
        <input type="text" name="code" id="code" placeholder="Entrez votre code de validation" required>

        <label for="password"><b>Mot de passe</b></label>
        <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required>

        <label for="repeatpassword"><b>Confirmation du mot de passe</b></label>
        <input type="password" name="repeatpassword" id="repeatpassword" placeholder="Confirmez votre mot mot de passe" required>

        <label>
            <input type="checkbox" name="connected" id="connected"> Rester connecté
        </label>

        <label>
            <input type="checkbox" name="conditions" id="conditions"> Je déclare accepter les <a href="cgu.html" style="color:dodgerblue">Conditions Générales d'Utilisation</a>
        </label>


        <div class="button">
            <button type="button" class="cancelbtn">Annuler</button>
            <a href="Doyouwant.html"><button type="button" class="signupbtn">S'inscrire</button></a>
        </div>
    </div>
</form>



</body>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php"); ?>
</html>
