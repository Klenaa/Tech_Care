<?php session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
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

        .navRight {
            display: flex;
            flex-direction: row;
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
        <a href="http://localhost/Tech_Care/view/html/home.php">
        <img src="http://localhost/Tech_Care/view/images/logoHeader.png" alt=""/>
        </a>
    </section>
        <?php
        if ($_SESSION['status'] == 'gestionnaire') {
            echo '
<section class="navButtonContainer">
               <div class="nav">
                    <button class="navButton" id="afterCo"><a href="http://localhost/Tech_Care/view/html/doYouWant.php">Tableau de bord</a></button>
               </div>
            <div class="nav">
                <button class="navButton" id="takeMeasures"><a href="http://localhost/Tech_Care/view/html/measuring_home.php">Prendre des mesures</a></button>
            </div>
            <div class="nav">
                <button class="navButton" id="mesurementAnalysis"><a href="http://localhost/Tech_Care/view/html/analyse_des_mesures.php">Analyse des résultats</a></button>
            </div>
            <div class="nav">
                <button class="navButton" id="usersData"><a href="http://localhost/Tech_Care/controller/gest_user_data.php">Données des utilisateurs</a></button>
            </div>
                </section>
    <section>
        <button class="option" ><a>Options</a></button>
        <div class="dropDownMenu dropOption">
            <a class="downMenu" href="http://localhost/Tech_Care/controller/editProfile.php">Profil</a>
            <a class="downMenu" href="http://localhost/Tech_Care/controller/deconnexion.php">Se déconnecter</a>
        </div>
    </section>';
        } else if ($_SESSION['status'] == 'administrateur') {
            echo '
<section class="navButtonContainer">
                <div class="nav">
                    <button class="navButton" id="afterCo"><a href="http://localhost/Tech_Care/view/html/doYouWant.php">Tableau de bord</a></button>
               </div>
                <div class="nav">
                    <button class="navButton" id="takeMeasures"><a href="http://localhost/Tech_Care/view/html/measuring_home.php">Prendre des mesures</a></button>
               </div>
                <div class="nav">
                    <button class="navButton" id="mesurementAnalysis"><a href="http://localhost/Tech_Care/view/html/analyse_des_mesures.php">Analyse des résultats</a></button>
                </div>
                <div class="nav">
                    <button class="navButton backOfficeAdministrator"><a href="">Backoffice administrateur</a></button>
                    <div class="dropDownMenu dropAdmin">
                        <a class="downMenu" href="http://localhost/Tech_Care/model/updateUserStatus.php">Gérer les utilisateurs</a>
                        <a class="downMenu" href="http://localhost/Tech_Care/view/html/FAQ_USER.php">Gérer la FAQ</a>
                        <!--<a class="downMenu" href="http://localhost/Tech_Care/view/html/Forum.php">Gérer le forum</a>-->
                    </div>
                </div>
                    </section>
    <section>
        <button class="option" ><a>Options</a></button>
        <div class="dropDownMenu dropOption">
            <a class="downMenu" href="http://localhost/Tech_Care/controller/editProfile.php">Profil</a>
            <a class="downMenu" href="http://localhost/Tech_Care/controller/deconnexion.php">Se déconnecter</a>
        </div>
    </section>';
        }
        else if ($_SESSION['status'] == 'utilisateur') {
            echo '
<section class="navButtonContainer">
                <div class="nav">
                    <button class="navButton" id="afterCo"><a href="http://localhost/Tech_Care/view/html/doYouWant.php">Tableau de bord</a></button>
               </div>
                <div class="nav">
                    <button class="navButton" id="takeMeasures"><a href="http://localhost/Tech_Care/view/html/measuring_home.php">Prendre des mesures</a></button>
                   </div>
                <div class="nav">
                    <button class="navButton" id="mesurementAnalysis"><a href="http://localhost/Tech_Care/view/html/Analyse_des_mesures.php">Analyse des résultats</a></button>
                </div>
                    </section>
    <section>
        <button class="option" ><a>Options</a></button>
        <div class="dropDownMenu dropOption">
            <a class="downMenu" href="http://localhost/Tech_Care/controller/editProfile.php">Profil</a>
            <a class="downMenu" href="http://localhost/Tech_Care/controller/deconnexion.php">Se déconnecter</a>
        </div>
    </section>';
        } else {
            echo '
            <div class="navRight"> 
                <div class="nav">
                    <button class="navButton" id="takeMeasures"><a href="http://localhost/Tech_Care/controller/register.php">S\'inscrire</a></button>
                   </div>
                <div class="nav">
                    <button class="navButton" id="mesurementAnalysis"><a href="http://localhost/Tech_Care/Controller/sign_in.php">Se connecter</a></button>
                </div>
            </div>
            ';
        }
        ?>


</header>

<?php
// echo session_status();

// echo $_SESSION['status'];
?>

</html>