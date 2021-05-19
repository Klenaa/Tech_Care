<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/doYouWant.css"/>

    
    <title>Menu utilisateur</title>
</head>

<body>
    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "header.php"); ?>
    <div class="container">
        <a href="#"><article class="elements">
            <h2>Compléter son profil</h2>
        </article></a>
        <a href="#"><article class="elements">
            <h2>Prendre ses mesures</h2>
        </article></a>
        <a href="#"><article class="elements">
            <h2>Historique des mesures</h2>
        </article></a>
    </div>

    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "footer.php"); ?>
</body>

</html>