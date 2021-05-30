<?php // content="text/plain; charset=utf-8"
require_once ('../jpgraph-4.3.4/src/jpgraph.php');
require_once ('../jpgraph-4.3.4/src/jpgraph_line.php');
require('../test_measure/showMeasure.php');
$datay1 = array();
$datay2 = array();
$datay3= array();

for($i=0; $i<30; $i++){
    if(isset($datas[$i])){
        if($datas[$i]['idSensor']=='2'){
            array_push($datay1, $datas[$i]['resultat']);
        } else if($datas[$i]['idSensor']=='1'){
            array_push($datay2, $datas[$i]['resultat']);
        } else if($datas[$i]['idSensor']=='3'){
            array_push($datay3, $datas[$i]['resultat']);
        }
    }
}

// Setup the graph
$graph = new Graph(800,400);
$graph->SetScale("textlin");

$theme_class= new AquaTheme();
$graph->SetTheme($theme_class);

$graph->title->Set('Courbes de progression');
$graph->SetBox(false);

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

//Placement de la date sur l'axe des abscisses


$graph->xaxis->SetTickLabels(array('date'));
$graph->ygrid->SetFill(false);
$graph->yaxis->scale->SetAutoMin(0);
$graph->yaxis->scale->SetAutoMax(10);

$p1 = new LinePlot($datay1);
$graph->Add($p1);

$p2 = new LinePlot($datay2);
$graph->Add($p2);

$p3 = new LinePlot($datay3);
$graph->Add($p3);

$p1->SetColor("#3366CC");

$p1->mark->SetType(MARK_FILLEDCIRCLE,'',1.0);
$p1->mark->SetColor('#3366CC');
$p1->mark->SetFillColor('#3366CC');
$p1->SetCenter();
$p2->SetColor("#DC3912");

$p2->mark->SetType(MARK_UTRIANGLE,'',1.0);
$p2->mark->SetColor('#DC3912');
$p2->mark->SetFillColor('#DC3912');
$p2->value->SetMargin(14);
$p2->SetCenter();

$p3->SetColor("orange");
$p3->mark->SetType(MARK_SQUARE,'',1.0);
$p3->mark->SetColor('orange');
$p3->mark->SetFillColor('orange');
$p3->value->SetMargin(14);
$p3->SetCenter();

// Output line
$graph->Stroke();
?>?>