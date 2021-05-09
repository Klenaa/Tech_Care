<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="FAQ Salem.css"/>
    <link rel="stylesheet" href="header.css"/>
    <title>FAQ</title>
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

<body>


<div class="box">
    <p class="heading" id="titre">FAQ</p>

<section1>
    <div class="container">
        <div class="accordion">
            <div class="accordion-item" id="question1">
                <a class="accordion-link" href="#question1">
                    Comment obtenir vos identifiants et mot de passe?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                    <p>
                        Dès lors que vous avez créer un compte chez TechCare, nous vous envoyons toutes vos identifiants et mot de passe dans votre boîte mail. N'aillez crainte si vous un quelconque soucis veuillez nous contacter via la messagerie interne du site ou par mail.
                    </p>
                </div>
            </div>

            <div class="accordion-item" id="question2">
                <a class="accordion-link" href="#question2">
                    Comment faire un test sur votre compte?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                    <p>
                        Après avoir créé votre compte, vous pourrez accéder a votre espace client dans lequel il vous sera proposer une panoplie de test. Vous auriez qu’à sélectionner le test que vous voulez ou bien faire un test complet. On vous recommande vivement de faire un test complet la première fois afin d’évaluer vos compétences.
                    </p>
                </div>
            </div>

            <div class="accordion-item" id="question3">
                <a class="accordion-link" href="#question3">
                    Comment accéder à vos résultats ?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                    <p>
                        C’est très simple, vous aurez un onglet « analyse de mes résultats ». Dans celui-ci sera afficher toutes vos informations et résultats sous forme de graphiques. Il sera également affiché l’évolution de vos réflexes au fil des tests.
                    </p>
                </div>
            </div>


            <div class="accordion-item" id="question4">
                <a class="accordion-link" href="#question4">
                    Qui a accès à mes résultats ?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                    <p>
                        Vous et les gestionnaires avez accès aux résultats de vos tests. Vos données sont utilisées pour réaliser une moyenne afin de permettre à chacun de situer dans la population, mais elles sont anonymisées.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

</section1>
</body>


<?php
            $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
            include($IPATH . "footer.php"); ?>
</html>