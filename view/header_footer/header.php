<?php session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="header.css"/>
    <title>header</title>
    <style>
        header
        {
            display: flex;
            flex-direction: row;
            height: 100px;
            justify-content: space-between;
            box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.1);
        }

        img
        {
            height: 80px;
            width: 250px;
        }
        .nav{
            margin-right: 15px;
        }

        .navButtonContainer{
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }

        .navButton
        {
            margin-top: 40px;
            text-decoration: none;
            background-color: transparent;
            font-size: large;
            border: hidden;
            padding-bottom: 20px;
        }

        .navButton:hover
        {
            text-decoration: underline;
        }

        .option
        {
            margin: 40px 25px 0 0;
            background-color: transparent;
            font-size: large;
            border: hidden;
        }

        #takeMeasures
        {
            color: #8f0015;
        }

        .dropDownMenu {
            display: none;
            flex-direction: column;
            align-items: center;
            box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 8px 0 8px 0;
        }

        .option:hover {
            text-decoration: underline;
        }

        .option:hover + .dropOption{
            display: flex;
        }

        .backOfficeAdministrator:hover + .dropAdmin{
            display: flex;
        }

        .dropAdmin{
            margin-top: -15px;
        }

        .dropDownMenu:hover {
            display:flex;
        }

        .downMenu:hover {
            text-decoration: underline;
        }

        a {
            text-decoration:none;
            color: #1E4D6E;
        }

    </style>
</head>

<header>
    <section>
        <a href="../html/home.php">
        <img src="../images/logoHeader.png" alt=""/>
        </a>
    </section>
        <?php

        if ($_SESSION['status'] == 'gestionnaire') {
            echo '
<section class="navButtonContainer">
            <div class="nav">
                <button class="navButton" id="takeMeasures"><a href="../html/measuring_home.php">Prendre des mesures</a></button>
            </div>
            <div class="nav">
                <button class="navButton" id="mesurementAnalysis"><a href="../html/Analyse_des_mesures.php">Analyse des résultats</a></button>
            </div>
            <div class="nav">
                <button class="navButton" id="usersData"><a href="../html/Gest_userData.php">Données des utilisateurs</a></button>
            </div>
                </section>
    <section>
        <button class="option" ><a>Options</a></button>
        <div class="dropDownMenu dropOption">
            <a class="downMenu" href="../../test/editProfile.php">Profil</a>
            <a class="downMenu" href="../../controller/deconnexion.php">Se déconnecter</a>
        </div>
    </section>';
        } else if ($_SESSION['status'] == 'administrateur') {
            echo '
<section class="navButtonContainer">
                <div class="nav">
                    <button class="navButton" id="takeMeasures"><a href="../html/measuring_home.php">Prendre des mesures</a></button>
                   </div>
                <div class="nav">
                    <button class="navButton" id="mesurementAnalysis"><a href="../html/Analyse_des_mesures.php">Analyse des résultats</a></button>
                </div>
                <div class="nav">
                    <button class="navButton backOfficeAdministrator"><a href="">Backoffice administrateur</a></button>
                    <div class="dropDownMenu dropAdmin">
                        <a class="downMenu" href="../html/user_management.php">Gérer les utilisateurs</a>
                        <a class="downMenu" href="../html/FAQ_Salem.php">Gérer la FAQ</a>
                        <a class="downMenu" href="../html/Forum.php">Gérer le forum</a>
                    </div>
                </div>
                    </section>
    <section>
        <button class="option" ><a>Options</a></button>
        <div class="dropDownMenu dropOption">
            <a class="downMenu" href="../../test/editProfile.php">Profil</a>
            <a class="downMenu" href="../../controller/deconnexion.php">Se déconnecter</a>
        </div>
    </section>';
        }
        else if ($_SESSION['status'] == 'utilisateur') {
            echo '
<section class="navButtonContainer">
                <div class="nav">
                    <button class="navButton" id="takeMeasures"><a href="../html/measuring_home.php">Prendre des mesures</a></button>
                   </div>
                <div class="nav">
                    <button class="navButton" id="mesurementAnalysis"><a href="../html/Analyse_des_mesures.php">Analyse des résultats</a></button>
                </div>
                    </section>
    <section>
        <button class="option" ><a>Options</a></button>
        <div class="dropDownMenu dropOption">
            <a class="downMenu" href="../../test/editProfile.php">Profil</a>
            <a class="downMenu" href="../../controller/deconnexion.php">Se déconnecter</a>
        </div>
    </section>';
        } else {
            echo'
             <ul class="menu">
                <li class="nav-item"><a class="nav-link" href="../../controller/register.php">S\'inscrire</a></li>
                <li class="nav-item"><a class="nav-link" href="../../test/signIn.php">Se connecter</a></li>
            </ul>
            ';
        }
        ?>


</header>

<?php
// echo session_status();

// echo $_SESSION['status'];
?>

</html>