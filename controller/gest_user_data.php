<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=db_eddy;port=3307;', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
include('../view/html/gest_user_data_post.php');
?>

<?php
error_reporting(0);


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
    if (($_POST['work']) == "autre") {

        if ($sql == "SELECT * FROM users INNER JOIN measure ON users.email = measure.email WHERE " || $sql == "SELECT * FROM users WHERE ") {
            $sql .= "profession != 'Cadre' AND profession != 'Avocat' AND profession != 'Ingénieur' AND profession != 'Manager' AND profession != 'Etudiant' AND profession != 'Médecin'";

        } else {
            $sql .= " AND profession != 'Cadre' AND profession != 'Avocat' AND profession != 'Ingénieur' AND profession != 'Manager' AND profession != 'Etudiant' AND profession != 'Médecin'";

        }
    }

}
$allUsers  = $bdd->query($sql);

if ($allUsers !== FALSE) {
    $allUsers  = $bdd->query($sql)->fetchAll();
    echo "<h3>Voici les utilisateurs qui correspondent à vos critères</h3>";
}

echo '<div class="container"><table>';


?><thead><tr><th>Mail</th><th>Nom</th><th>Prenom</th><th>Genre</th><?
if(!empty($_POST['date'] && !empty($_POST['date']))){
    echo '<th>Résultat de la mesure</th></tr></thead>';
}


foreach ($allUsers as $rowUser){

    ?><tbody><tr class="col"><?
    ?><td><?= $rowUser['email'] ?> </td><?
    ?><td><?= $rowUser['userName'] ?> </td><?
    ?><td><?= $rowUser['userSurname'] ?> </td><?
    ?><td><?= $rowUser['gender'] ?> </td><?
    if(!empty($_POST['date'] && !empty($_POST['date']))) {
    ?><td><?= $rowUser['measureResult'] ?> </td><?
    }
    ?><td></tr></tbody><br></td><?
}
?></table></div><br><?php

$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php");


?>



