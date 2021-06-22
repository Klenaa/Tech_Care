<?php
require '../model/connect.php';
include('../fonctions/register_functions.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>S'inscrire</title>
        <link rel="stylesheet" href="../view/css/updateUserStatus.css"/>
    </head>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "header.php"); ?>
    <body>
    <?php
    $ch = curl_init();
    curl_setopt(
        $ch,
        CURLOPT_URL,
        "http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=G10B");
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    //echo "Raw Data:<br />";
    //echo("$data");

    //Mettre les données sous forme de tableau
    $data_tab = str_split($data,33);
    echo "Tabular Data:<br />";
    for($i=0, $size=count($data_tab); $i<$size; $i++){
        echo '<div class="container"><table>';
        echo '<thead><tr><th>type de trame</th><th>N° d\'objet</th><th>Type de requête</th><th>type de capteur</th></tr></thead>';

        echo "Trame $i: $data_tab[$i]<br />";

        $trame = $data_tab[$i];


        list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
            sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
        echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");







        sleep(2);
    }

/*
    if(isNewData($bdd, $year . '-' . $month . '-' . $day . ' ' . $hour . ':' . $min . ':' . $sec)){
        echo 'normalement ok pas de trame pareille';
        $req = $bdd->prepare('INSERT INTO data(sensorType, dataValue, dataDate) VALUES (:sensorType, :dataValue, :dataDate)');
        $req->execute(array(
            'sensorType' => $c,
            'dataValue' => hexdec($v),
            'dataDate' => $year . '-' . $month . '-' . $day . ' ' . $hour . ':' . $min . ':' . $sec
        ));
    }
    else{
        'la trame existe déjà';
    }*/


    // décodage avec des substring (inutile)
    $t = substr($trame,0,1); //trame courante
    $o = substr($trame,1,4); //numéro d'objet
    $r = substr($trame,4,5);
    $typ = substr($trame,5,6);
    $num = substr($trame,6,8);
    $val = substr($trame,8,12);
    $chk = substr($trame,12,14);

    //echo 'trame : ' . $t ;
    // …
    // décodage avec sscanf



    function isNewData($bdd, $dateToCheck){
        $reqMail = $bdd->prepare('SELECT dataDate FROM data WHERE dataDate = ?');
        $reqMail->execute(array($dateToCheck));
        $emailCount = $reqMail->rowCount();

        if($emailCount == 0){

            return true;
        }
        else {
            return false;
        }
    }

    /*

    */
    if($c==3){
        echo 'le capteur de température mesure :' . $v;
    }





    ?>








    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "footer.php");
    ?>
    </body>
</html>