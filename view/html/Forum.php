<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="Forum.css"/>
    <link rel="stylesheet" href="header.css"/>
    <title>Forum</title>
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
        <button class="option" ><a>Options</a></button>
        <div class="dropDownMenu dropOption">
            <a class="downMenu" href="edit_profile.html">Profil</a>
            <a class="downMenu" href="home.html">Se déconnecter</a>
        </div>
    </section>
</header>
<br>
<body>



<h1>Forum</h1>
<p>Sujet 1</p>
<p>Sujet 2</p>
<p>Sujet 3</p>
<p>Sujet 4</p>
<br>
<hr>

<h3>Posez vos questions</h3><br>

<div class="ask">
<label>
    <input type="text" name="" class="champ" placeholder="Ecrivez votre question" size="50">
</label><br>
<button type="button" class="signupbtn">Ajouter le sujet</button>
</div>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php"); ?>
</body>


</html>