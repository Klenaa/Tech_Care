<?php
require '../../model/connect.php';
include('../../controller/measureAnalysisFunction.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../css/Analyse-des-mesures.css"/>
    <title>Analyse des mesures</title>
</head>

<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "header.php"); ?>

<body class="corps">
    <section class="measures">
        <h1><?php dateMeasure($bdd) ?></h1>
        <?php
            dispData($bdd);
        ?>
    </section>
    <section class="selection">

        <label class="testDateLabel" for="testDate">Selectionner une date</label>
        <div class="multipleChoice">
            <form action="Analyse_des_mesures.php" method="POST">
                <input type="date" name="chosenDate">
                <button type="submit" name="dateValidation">Valider</button>
            </form>
        </div>
        <?php
            if (isset($_POST['dateValidation'])) {
                $newDate = $_POST['chosenDate'];
            } else {
                $newDate = null;
            }
        measureSelectionAuto($bdd, $newDate);
        ?>
    </section>

</body>

<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php"); ?>

</html>
