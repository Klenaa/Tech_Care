<?php
require '../../model/connect.php';


function measureSelectionAuto($bdd, $newDate) {

    if ($newDate == null) {
        $req = $bdd->prepare('SELECT * FROM test WHERE email = ? ORDER BY date DESC LIMIT 4');
        $req->execute(array($_SESSION['email']));
    } else {
        $req = $bdd->prepare('SELECT * FROM test WHERE date = ? and email = ? ORDER BY date');
        $req->execute(array($newDate, $_SESSION['email']));
    }
    $nameCount = 0;
    while ($donnees = $req->fetch())
    {
        ?>
        <div class="proposition">
            <h3 class="selectionTitle"> <?php
                $measureDate = $donnees['date'];
                echo "Mesure du " . date("j", strtotime("$measureDate")) . " " . date("F", strtotime("$measureDate")) . " " . date("Y", strtotime("$measureDate"));
                ?></h3>
            <form action="Analyse_des_mesures.php?id=<?php echo $donnees['refMeasure']; ?>" method="POST" style="display: flex; flex-direction: row; align-items: center; justify-content: space-evenly">
                <p> <?php echo $donnees['result'] ?> </p>
                <button style="height: 20px; margin-left: 50px" type="submit" name="  " value="<?php $donnees['refMeasure'] ?>">Voir</button>
            </form>
        </div>
        <?php
        $nameCount ++;
    }
    $req->closeCursor();
}

function getId() {
    if ($_GET['id']) {
        return $_GET['id'];
    } else {
        return 70;
    }
}

function dispData($bdd) {
    $refMeasure = getId();
    $reqResult = $bdd->prepare('SELECT m.measureResult measureResult, t.date measureDate, t.result result, s.sensorName sensor
                FROM measure m
                LEFT JOIN test t 
                ON m.refMeasure = t.refMeasure
                LEFT JOIN sensor s
                ON m.idSensor = s.idSensor
                WHERE m.refMeasure = ?
                ORDER BY s.sensorName'
    );
    try {
    $reqResult->execute(array($refMeasure));
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    ?>
    <table class="resultTable">
        <thead>
        <tr>
            <td>Reconnaissance tonalité</td>
            <td>Reproduction teinte <br> colorée</td>
            <td>Rythme Cardiaque</td>
            <td>Temperature</td>
            <td>Temps de réaction <br> lumière</td>
            <td>Temps de réaction <br> son</td>
        </tr>
        </thead>
        <tbody>
        <tr>
        <?php
        while ($donnees = $reqResult->fetch()) {
            ?>
            <td><?php echo $donnees['measureResult']; ?></td>
            <?php
        }
        ?>
        </tr>
        </tbody>
    </table>
    <?php
            $reqResult->closeCursor();
}


// 'SELECT * FROM test WHERE date = ? and email = ? ORDER BY date'
// 'SELECT * FROM test WHERE email = ? ORDER BY date DESC LIMIT 3'
?>


