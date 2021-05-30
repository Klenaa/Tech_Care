<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prendre des mesures</title>
    <link rel="stylesheet" href="../css/measuring_home.css"/>
    <link rel="stylesheet" href="../css/header2.css"/>
</head>
<main>

    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "header.php"); ?>
    <!--Le stress-->

    <div class="mini-text">
        <h2>Fonctions de santé</h2>
        <div class="separator"></div>
        <h4>Mesurer son stress à l'aide de capteurs</h4>
    </div>
    <!--Article-->
    <div id="part2">
        <div id="performance">
            <div class="info-container png-container">
                <article>
                   <a href="audioMeasure.php">
                        <div class="info-box">
                            <h4 class="articleTitle" >Reconnaissance de tonalité</h4>
                            <img class="png" src="../images/test/auditif.png">
                        </div>
                   </a>
                </article>
                <article>
                    <a href="CardiacMeasure.php">
                        <div class="info-box">
                            <h4 class="articleTitle">Mesure la fréquence cardiaque</h4>
                            <img class="png" src="../images/test/cardio.png">
                        </div>
                    </a>
                </article>
                <article>
                    <a href="HeatMeasure.php">
                        <div class="info-box">
                            <h4 class="articleTitle">Mesure de la température</h4>
                            <img class="png" src="../images/temperature.png">
                        </div>
                    </a>
                </article>
            </div>
        </div>
    </div>

    <!--Performance et stress-->
    <div class="mini-text">
        <h2>Fonctions de Concentrations</h2>
        <div class="separator"></div>
        <h4>Réussir à se détendre en se concentrant</h4>
    </div>
    <div id="part2">
        <div id="performance">
            <article>
                <div class="info-box">
                    <h4 class="articleTitle">Temps de réaction à une lumière inattendue</h4>
                    <img class="png" src="../images/lumiere.png">
                </div>
            </article>
            <article>
                <div class="info-box">
                    <h4 class="articleTitle">Temps de réaction à un son inattendu</h4>
                    <img class="png" src="../images/son.png">
                </div>
            </article>
            <article>
                <div class="info-box">
                    <h4 class="articleTitle">Capacité à reproduire une teinte colorée</h4>
                    <img class="png" src="../images/ampoule.png">
                </div>
            </article>
        </div>
    </div>
    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "footer.php"); ?>

</main>
</html>
