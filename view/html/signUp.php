<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="signUp.css"/>
    <link rel="stylesheet" href="header.css"/>
    <title>S'inscrire</title>
</head>
<header>
    <section>
        <a href="Doyouwant.html">
            <img src="./images/logoHeader.png" alt=""/>
        </a>
    </section>
    <section class="navButtonContainer">
        <div class="nav">
            <button class="navButton" id="takeMeasures"><a href="measuring_home.html">Prendre des mesures</a></button>
        </div>
        <div class="nav">
            <button class="navButton" id="mesurementAnalysis"><a href="Analyse_des_mesures.html">Analyse des résultats</a></button>
        </div>
        <div class="nav">
            <button class="navButton" id="usersData"><a href="Gest_userData.html">Données des utilisateurs</a></button>
        </div>
        <div class="nav">
            <button class="navButton backOfficeAdministrator"><a href="">Backoffice administrateur</a></button>
            <div class="dropDownMenu dropAdmin">
                <a class="downMenu" href="user_management.html">Gérer les utilisateurs</a>
                <a class="downMenu" href="FAQ.html">Gérer la FAQ</a>
                <a class="downMenu" href="Forum.html">Gérer le forum</a>
            </div>
        </div>
    </section>
    <section>
        <button class="option" ><a href="signUp.html">S'inscrire</a></button>
    </section>
</header>

<body>


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
