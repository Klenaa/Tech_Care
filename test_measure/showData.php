<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des données</title>
    <link rel="stylesheet" href="../view/css/showData.css">
    <link rel="stylesheet" href="../view/css/header2.css"/>
</head>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "header.php"); ?>


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