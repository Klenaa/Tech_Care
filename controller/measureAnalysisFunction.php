<?php
require '../model/connect.php';

$refMeasure = 70;

function measureSelectionAuto($bdd, $newDate) {
    global $refMeasure;
    if (isset($_POST["nom1"])) {
        // $refMeasure = $_POST[$nom.$compteur];
    }
    echo $refMeasure;
    if ($newDate == null) {
        $req = $bdd->prepare('SELECT * FROM test WHERE email = ? ORDER BY date DESC LIMIT 4');
        $req->execute(array($_SESSION['email']));
    } else {
        $req = $bdd->prepare('SELECT * FROM test WHERE date = ? and email = ? ORDER BY date');
        $req->execute(array($newDate, $_SESSION['email']));
    }
    $compteur = 0;
    $nom = "nom";
    while ($donnees = $req->fetch())
    {
        ?>
        <div class="proposition">
            <h3 class="selectionTitle"> <?php
                $measureDate = $donnees['date'];
                echo "Mesure du " . date("j", strtotime("$measureDate")) . " " . date("F", strtotime("$measureDate")) . " " . date("Y", strtotime("$measureDate"));
                ?></h3>
            <form action="Analyse_des_mesures.php" method="POST" style="display: flex; flex-direction: row; align-items: center; justify-content: space-evenly">
                <p> <?php echo $donnees['result'] ?> </p>
                <button style="height: 20px; margin-left: 50px" type="submit" name="<?php echo $nom.$compteur ?> " value="<?php $donnees['refMeasure'] ?>">Voir</button>
            </form>
        </div>
        <?php
        $compteur ++;
    }
    $req->closeCursor();
}


function dispData($bdd) {
    global $refMeasure;
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
    $reqResult->execute(array(70));
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
            echo $donnees['measureResult'];
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


