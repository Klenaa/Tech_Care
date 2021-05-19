<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="connexion.css"/>
    <link rel="stylesheet" href="../header_footer/header.css"/>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
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
                <a class="downMenu" href="messagerie.html">Gérer la messagerie</a>
            </div>
        </div>
    </section>
    <section>
        <button class="option" ><a href="signUp.html">S'inscrire</a></button>
    </section>
</header>

<body>

<broly>
    <form>

        <h1>Se connecter</h1>
        <div class="social-media">
            <p><i class="fab fa-google"></i></p>
            <p><i class="fab fa-youtube"></i></p>
            <p><i class="fab fa-facebook-f"></i></p>
            <p><i class="fab fa-twitter"></i></p>
        </div>
        <p class="choose-email">Ou utiliser mon adresse e-mail :</p>

        <div class="inputs">
            <input type="email" placeholder="Email"/>
            <input type="password" placeholder="Mot de passe">
        </div>

        <div class="container">

            <input type="checkbox"> <label> Rester connecté </label>
        </div>

        <p class="inscription">
            <a href="creeuncompte.html"><span>Mot de passe oublié ? </span></a> <br> <br>
            Vous n'avez pas encore de <a>compte</a>? <a href="signUp.html"><span> Créez-en un !</span></a>


        <div>
            <a href="../html/doYouWant.php"><button type="button" >Se connecter</button></a>
        </div>
    </form>
</broly>

<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php"); ?>
</body>
</html>
