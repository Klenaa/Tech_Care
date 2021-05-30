<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des données</title>
    <link rel="stylesheet" href="../view/css/showData.css">
    <link rel="stylesheet" href="../view/css/header2.css"/>
</head>
<header>
    <section>
        <a href="../view/html/doYouWant.php">
            <img src="../view/images/logoHeader.png" alt=""/>
        </a>
    </section>
    <section class="navButtonContainer">
        <div class="nav">
            <button class="navButton" id="takeMeasures"><a href="../view/html/measuring_home.php">Prendre des mesures</a></button>
        </div>
        <div class="nav">
            <button class="navButton" id="mesurementAnalysis"><a href="../view/html/Analyse_des_mesures.php">Analyse des résultats</a></button>
        </div>
        <div class="nav">
            <button class="navButton" id="usersData"><a href="../view/html/Gest_userData.php">Données des utilisateurs</a></button>
        </div>
        <div class="nav">
            <button class="navButton backOfficeAdministrator"><a href="">Backoffice administrateur</a></button>
            <div class="dropDownMenu dropAdmin">
                <a class="downMenu" href="../view/html/user_management.php">Gérer les utilisateurs</a>
                <a class="downMenu" href="../view/html/FAQ_Salem.php">Gérer la FAQ</a>
                <a class="downMenu" href="../view/html/messagerie.php">Gérer la messagerie</a>
            </div>
        </div>
    </section>
    <section>
        <button class="option" ><a>Options</a></button>
        <div class="dropDownMenu dropOption">
            <a class="downMenu" href="../view/html/edit_profile.php">Profil</a>
            <a class="downMenu" href="../view/html/home.php">Se déconnecter</a>
        </div>
    </section>
</header>


<body>
    <div class="Graph">
        <?php
            echo "<img alt='graphique'src='graphMeasure.php' />";
        ?>
    </div>

    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "footer.php"); ?>
</body>
</html>