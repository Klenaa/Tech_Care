<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Données des utilisateurs</title>
    <link rel="stylesheet" href="../view/css/gest_user_data.css"/>

</head>

<main>


    <div class="mini-text">
        <h2>Données des utilisateurs</h2>
        <div class="separator"></div>
    </div>
    <br>
    <form method="post">
        <br><br>
        <div id="rechercher">
            <div id="criteria">
                <section class="criteria-section">
                    <input type="checkbox" id="crit-age" name="withAge" value="oui">
                    <label class="label-criteria" for="section-age">Âge</label>
                    <ul>
                        <li>
                            <input type="radio" id="kid" name="age" value="kid" checked>
                            <label for="kid">10-20 ans</label>
                        </li>
                        <li>
                            <input type="radio" id="young" name="age" value="young">
                            <label for="young">20-30 ans</label>
                        </li>
                        <li>
                            <input type="radio" id="young-adult" name="age" value="young-adult">
                            <label for="young-adult">30-40 ans</label>
                        </li>
                        <li>
                            <input type="radio" id="adult" name="age" value="adult">
                            <label for="adult">40-50 ans</label>
                        </li>
                        <li>
                            <input type="radio" id="senior" name="age" value="senior">
                            <label for="senior">50-60 ans</label>
                        </li>
                    </ul>
                </section>
                <section class="criteria-section">
                    <input type="checkbox" id="crit-genre" name="gender" value="oui">
                    <label class="label-criteria" for="section-genre">Genre</label>
                    <ul>
                        <li>
                            <input type="radio" id="man" name="genre" value="homme" checked>
                            <label for="man">Homme</label>
                        </li>
                        <li>
                            <input type="radio" id="woman" name="genre" value="femme">
                            <label for="woman">Femme</label>
                        </li>
                    </ul>
                </section>
                <section class="criteria-section">
                    <input type="checkbox" id="crit-date" name="dateMesure">
                    <label class="label-criteria" for="section-date">Date de mesure</label>
                    <ul>
                        <li>
                            <input type="date" id="year" name="date">
                            <label for="date"></label>
                        </li>
                    </ul>
                </section>
                <section class="criteria-section">
                    <input type="checkbox" id="crit-test" name="typeTest" >
                    <label class="label-criteria" for="section-date">Type de test</label>
                    <ul>
                        <li>
                            <input type="radio" id="cardio" name="test" value="cardio" checked>
                            <label for="cardio">Fréquence cardiaque</label>
                        </li>
                        <li>
                            <input type="radio" id="ton" name="test" value="ton">
                            <label for="ton">Reconnaissance de tonalité</label>
                        </li>
                        <li>
                            <input type="radio" id="temperature" name="test" value="temp">
                            <label for="temp">Mesure de température</label>
                        </li>
                        <li>
                            <input type="radio" id="reaction" name="test" value="react">
                            <label for="react">Temps de réaction</label>
                        </li>
                        <li>
                            <input type="radio" id="lux" name="test" value="lux">
                            <label for="lux">Reconnaissance d'une lumière</label>
                        </li>
                    </ul>
                </section>
                <section class="criteria-section">
                    <input type="checkbox" id="crit-test" name="profession" >
                    <label class="label-criteria" for="section-date">Profession</label>
                    <ul>
                        <li>
                            <input type="radio" id="student" name="work" value="student" checked>
                            <label for="student">Etudiant</label>
                        </li>
                        <li>
                            <input type="radio" id="engi" name="work" value="engi">
                            <label for="engi">Ingénieur</label>
                        </li>
                        <li>
                            <input type="radio" id="lawyer" name="work" value="lawyer">
                            <label for="lawyer">Avocat</label>
                        </li>
                        <li>
                            <input type="radio" id="doctor" name="work" value="doctor">
                            <label for="doctor">Médecin</label>
                        </li>
                        <li>
                            <input type="radio" id="mana" name="work" value="mana">
                            <label for="mana">Manager</label>
                        </li>
                        <li>
                            <input type="radio" id="cadre" name="work" value="cadre">
                            <label for="cadre">Cadre</label>
                        </li>
                    </ul>
                </section>
            </div>
        </div>

        <div class="validation">
            <input type="submit" id="bouton" name="bouton" value="Rechercher">
        </div>
    </form>

</main>

</html>

<?php
error_reporting(0);

$bdd = new PDO('mysql:host=localhost;dbname=test2;port=3307', 'root', 'root');

$sql = "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE ";


if (empty($_POST['date']) && empty($_POST['typeTest'])){
    $sql = "SELECT * FROM users WHERE ";
}

if(isset($_POST['name']) && !empty($_POST['name'])) {
    if ($sql == "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE " || $sql == "SELECT * FROM users WHERE " ) {
        $sql .= " userName = '".$_POST['name']."' OR userSurname = '".$_POST['name']."'";

    } else {
        $sql .= "AND userName = '". $_POST['name']."'";
    }
}


if(isset($_POST['gender']) && !empty($_POST['gender'])){
    if ($_POST['genre'] == "homme"){

        if ($sql ==  "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE " || $sql == "SELECT * FROM users WHERE ") {
            $sql .= "gender = 'homme' ";

        } else {
            $sql .= " AND gender = 'homme' " ;

        }

    } else if ($_POST['genre'] == "femme") {

        if ($sql ==  "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE " || $sql == "SELECT * FROM users WHERE ") {
            $sql .= "gender = 'femme' ";
        } else {
            $sql .= " AND gender = 'femme' ";

        }
    }
}

if(isset($_POST['withAge']) && !empty($_POST['withAge'])){

    if ($_POST['age'] == "kid"){

        if ($sql ==  "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE " || $sql == "SELECT * FROM users WHERE ") {
            $sql .= "birthday BETWEEN '2001-05-24' AND '2011-05-24' ";
        } else {
            $sql .= " AND birthday BETWEEN '2001-05-24' AND '2011-05-24' ";
        }

    } else if ($_POST['age'] == "young") {
        if ($sql ==  "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE " || $sql == "SELECT * FROM users WHERE ") {
            $sql .= "birthday BETWEEN '1991-05-24' AND '2001-05-24' ";
        } else {
            $sql .= " AND birthday BETWEEN '1991-05-24' AND '2001-05-24' ";
        }

    } else if ($_POST['age'] == "young-adult") {
        if ($sql ==  "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE " || $sql == "SELECT * FROM users WHERE ") {
            $sql .= "birthday BETWEEN '1981-05-24' AND '1991-05-24' ";
        } else {
            $sql .= " AND birthday BETWEEN '1981-05-24' AND '1991-05-24' ";
        }

    } else if ($_POST['age'] == "adult") {
        if ($sql ==  "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE " || $sql == "SELECT * FROM users WHERE ") {
            $sql .= "birthday BETWEEN '1971-05-24' AND '1981-05-24' ";
        } else {
            $sql .= " AND birthday BETWEEN '1971-05-24' AND '1981-05-24' ";
        }

    } else if ($_POST['age'] == "senior") {
        if ($sql ==  "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE " || $sql == "SELECT * FROM users WHERE ") {
            $sql .= "birthday BETWEEN '1961-05-24' AND '1971-05-24' ";
        } else {
            $sql .= " AND birthday BETWEEN '1961-05-24' AND '1971-05-24' ";
        }

    }
}


if(isset($_POST['dateMesure']) && !empty($_POST['dateMesure'])){
    if (!empty($_POST['date'])) {

        if ($sql == "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE ") {
            $sql .= "measureDate = '".$_POST['date']."'";

        } else {
            $sql .= "AND measureDate = '". $_POST['date']."'";
        }
    }
}

if(isset($_POST['typeTest']) && !empty($_POST['typeTest'])){

    if (($_POST['test']) == "temp") {

        if ($sql == "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE ") {
            $sql .= "idSensor = 1 ";

        } else {
            $sql .= " AND idSensor = 1 ";

        }
    }
    if (($_POST['test']) == "cardio") {

        if ($sql == "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE ") {
            $sql .= "idSensor = 2 ";

        } else {
            $sql .= " AND idSensor = 2 ";

        }
    }
    if (($_POST['test']) == "ton") {

        if ($sql == "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE ") {
            $sql .= "idSensor = 3 ";

        } else {
            $sql .= " AND idSensor = 3 ";

        }
    }
}

if(isset($_POST['profession']) && !empty($_POST['profession'])) {
    if (($_POST['work']) == "student") {

        if ($sql == "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE " || $sql == "SELECT * FROM users WHERE ") {
            $sql .= "profession = 'Etudiant' ";

        } else {
            $sql .= " AND profession = 'Etudiant' ";

        }
    }
    if (($_POST['work']) == "engi") {

        if ($sql == "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE " || $sql == "SELECT * FROM users WHERE ") {
            $sql .= "profession = 'Ingénieur' ";

        } else {
            $sql .= " AND profession = 'Ingénieur' ";

        }
    }
    if (($_POST['work']) == "lawyer") {

        if ($sql == "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE " || $sql == "SELECT * FROM users WHERE ") {
            $sql .= "profession = 'Avocat' ";

        } else {
            $sql .= " AND profession = 'Avocat' ";

        }
    }
    if (($_POST['work']) == "doctor") {

        if ($sql == "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE " || $sql == "SELECT * FROM users WHERE ") {
            $sql .= "profession = 'Médecin' ";

        } else {
            $sql .= " AND profession = 'Médecin' ";

        }
    }
    if (($_POST['work']) == "mana") {

        if ($sql == "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE " || $sql == "SELECT * FROM users WHERE ") {
            $sql .= "profession = 'Manager' ";

        } else {
            $sql .= " AND profession = 'Manager' ";

        }
    }
    if (($_POST['work']) == "cadre") {

        if ($sql == "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE " || $sql == "SELECT * FROM users WHERE ") {
            $sql .= "profession = 'Cadre' ";

        } else {
            $sql .= " AND profession = 'Cadre' ";

        }
    }

}
$allUsers  = $bdd->query($sql);

if ($allUsers !== FALSE) {
    $allUsers  = $bdd->query($sql)->fetchAll();
} else {
    echo "<h5><br><br>Votre recherche ne correspond à aucun résultat.</h5>";
}





echo '<div class="container"><table>';
if ($allUsers == FALSE ) {

} else {
    echo '<thead><tr><th>Mail</th><th>Nom</th><th>Prenom</th><th>Genre</th>';
if(!empty($_POST['date'] && !empty($_POST['date']))){
    echo '<th>Résultat de la mesure</th></tr></thead>';
}
}


foreach ($allUsers as $rowUser){

    echo '<tbody><tr class="col">';
    echo "<td>" . $rowUser['email'] . "</td>";
    echo "<td>" . $rowUser['userName'] . "</td>";
    echo "<td>" . $rowUser['userSurname'] . "</td>";
    echo "<td>" . $rowUser['gender'] . "</td>";
if(!empty($_POST['date'] && !empty($_POST['date']))) {
    echo "<td>" . $rowUser['measureResult'] . "</td>";


}
    echo '</tr></tbody><br>';
}
echo '</table></div>';



?>
<!--
$req = $bdd->prepare($sql);
$req->setFetchMode(PDO:: FETCH_OBJ);
$req->execute();

$count = $req->rowCount();

if ($count >= 1){
    echo "$count résultats trouvés ";

} else {
    echo "Votre recherche ne correspond à aucun résultat";
}

?>
-->

