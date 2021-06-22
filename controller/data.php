<?php
require '../model/connect.php';
include('../fonctions/register_functions.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>S'inscrire</title>
        <link rel="stylesheet" href="../view/css/register.css"/>
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
    echo "Raw Data:<br />";
    echo("$data");

    $data_tab = str_split($data,33);
    echo "Tabular Data:<br />";
    for($i=0, $size=count($data_tab); $i<$size; $i++){
        echo "Trame $i: $data_tab[$i]<br />";

        $trame = $data_tab[$i];
        // décodage avec des substring
        $t = substr($trame,0,1);
        $o = substr($trame,1,4);
        $r = substr($trame,4,5);
        $typ = substr($trame,5,6);
        $num = substr($trame,6,8);
        $val = substr($trame,8,12);
        $chk = substr($trame,12,14);
        $dateNow = substr($trame,14,28);

        $req = $bdd->prepare('INSERT INTO data(sensorType, dataValue, dataDate) VALUES (:sensorType, :dataValue, :dataDate)');
        $req->execute(array(
            'sensorType' => $typ,
            'dataValue' => $val,
            'dataDate' =>
            ));

        sleep(1);
    }




    echo 'trame : ' . $t ;
    // …
    // décodage avec sscanf
    list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
        sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
    echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");



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