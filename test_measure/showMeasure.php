<?php
session_start();

try
{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=db;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$sql="SELECT t.date, t.refMeasure, m.refMeasure, m.measureResult, m.idSensor FROM test t INNER JOIN measure m  
 WHERE t.refMeasure = m.idMeasure AND t.email ='choix'";

$result=mysqli_query($bdd, $sql);
$datas=array();


//Ajout de tous les résultats de l'utilisateur dans un tableau array
while($row = mysqli_fetch_assoc($result)){
    $datas[] = $row;
}

//Ajout de score
$cardiaque=0;
$tonalite=0;
$temperature=0;
for($i=0; $i<40 ; $i++){
    if(isset($datas[$i])){
        if($datas[$i]['idSensor']=='2'){
            $cardiaque++;
        } else if($datas[$i]['idSensor']=='1'){
            $temperature++;
        } else if($datas[$i]['idSensor']=='3'){
            $tonalite++;
        }}}
?>