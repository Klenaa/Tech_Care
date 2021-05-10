<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="Analyse-des-mesures.css"/>
    <link rel="stylesheet" href="header.css"/>
    <title>Analyse des mesures</title>
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
<body class="corps">
    <section class="measures">
        <h1>Mesure de référence</h1>
        <img src="./images/test/graph.png" alt="" class="graph">
    </section>
    <section class="selection">
        <div class="proposition">
            <h3 class="selectionTitle">Mesure du 15 janvier 2021</h3>
            <p>Calme</p>
        </div>
        <div class="proposition">
            <h3 class="selectionTitle">Mesure du 15 janvier 2021</h3>
            <p>Stressé</p>
        </div>
        <div class="calendar police truc">

            <div>Avril 2021</div>

            <span>Lun</span>
            <span>Mar</span>
            <span>Mer</span>
            <span>Jeu</span>
            <span>Ven</span>
            <span>Sam</span>
            <span>Dim</span>

            <span class="blank"><!--BLANK--></span>
            <span class="blank"><!--BLANK--></span>
            <span class="blank"><!--BLANK--></span>
            <span class="blank"><!--BLANK--></span>
            <span class="blank"><!--BLANK--></span>
            <span class="blank"><!--BLANK--></span>
            <span>1</span>
            <span class="circle" data-title="Mesure">2</span>
            <span>3</span>
            <span>4</span>
            <span>5</span>
            <span>6</span>
            <span>7</span>
            <span>8</span>
            <span>9</span>
            <span>10</span>
            <span>11</span>
            <span class="circle" data-title="Mesure">12</span>
            <span>13</span>
            <span>14</span>
            <span>15</span>
            <span>16</span>
            <span>17</span>
            <span>18</span>
            <span>19</span>
            <span>20</span>
            <span>21</span>
            <span class="circle" data-title="Mesure">22</span>
            <span>23</span>
            <span>24</span>
            <span>25</span>
            <span>26</span>
            <span>27</span>
            <span>28</span>
            <span>29</span>
            <span>30</span>
            <span class="blank"><!--BLANK--></span>
            <span class="blank"><!--BLANK--></span>
            <span class="blank"><!--BLANK--></span>
            <span class="blank"><!--BLANK--></span>
            <span class="blank"><!--BLANK--></span>
            <span class="blank"><!--BLANK--></span>
        </div>
    </section>
    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "footer.php"); ?>
</body>
</html>