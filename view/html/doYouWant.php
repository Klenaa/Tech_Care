<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/doYouWant.css"/>
    <script type="text/javascript" src="../javascript/validatePassword.js"></script>

    
    <title>Menu utilisateur</title>
</head>

<body>
    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "header.php"); ?>

    <?php
    if(empty($_SESSION['birthday']) ||
        empty($_SESSION['gender']) ||
        empty($_SESSION['address']) ||
        empty($_SESSION['postalCode']) ||
        empty($_SESSION['city']) ||
        empty($_SESSION['country']) ||
        empty($_SESSION['profession'])){?>
        <p style="color: #8f0015; font-family: Verdana">Avant de continuer, veuillez compléter vos informations sur votre page profil.</p>
<?php
    }
    ?>
    <div class="container">

        <a href="../../test/editProfile.php">
            <article class="elements">
                <h2>Compléter son profil</h2>
            </article>
            <div class="boximg">
                <img class="iconmg" src="../images/img/profil.png">
            </div>
        </a>

        <a href="#">
            <article class="elements">
            <h2>Prendre ses mesures</h2>
            </article>
            <div class="boximg">
                <img class="iconmg" src="../images/img/heart.png">
            </div>
        </a>
        <a href="#">
            <article class="elements">
                <h2>Historique des mesures</h2>
            </article>
            <div class="boximg">
                <img class="iconmg" src="../images/img/historic.png">
            </div>
        </a>
    </div>

    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "footer.php"); ?>
</body>

</html>