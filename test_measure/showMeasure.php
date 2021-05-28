<?php
try
{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=db;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>
<?php
$host="localhost";
$username="root";
$password="root";
$dbname="db";
$connection=mysql_connect($host,$username,$password) or die('Connexion impossible: ' . mysql_error());
$db=mysql_select_db($dbname, $connection) or die('Connexion a la base impossible : ' . mysql_error());
$query=mysql_query('SELECT * FROM measure ORDER BY measureDate ASC');


$measureDate=array();
$measureResult=array();
$i=0;
while($row=mysql_fetch_array($query))
{
    //Mettre la ligne dans le tableau
    $measureDate[$i]=$row["date"];
    $measureResult[$i]=$row["mesure"];
    //Prendre la première mesure comme minimum et maximum
    if($i==0)
    {
        $min=$row["mesure"];
        $max=$row["mesure"];
    }
    //Tester si la mesure est inférieure au minimum et la prendre si c'est le cas
    if($row["mesure"] < $min)
    {
        $min=$row["mesure"];
    }
    //Tester si la mesure est inférieure au maximum et la prendre si c'est le cas
    else
    {
        if($row["mesure"] > $max)
        {
            $max=$row["mesure"];
        }
    }
//	echo $measureDate[$i]." - ".$measureResult[$i]."<br>";
    $i++;

}
//echo "min : ".$min."   -   max : ".$max;


//Type mime de l'image
header('Content-type: image/png');
//Chemin vers le police à utiliser
$font_file = './arial.ttf';
//Adapter la largeur de l'image avec le nombre de données
$largeur=$i*50+90;
$hauteur=400;
//Hauteur de l'abscisse par rapport au bas de l'image
$absis=80;
//Création de l'image
$courbe=imagecreatetruecolor($largeur, $hauteur);
//Allouer les couleurs à utiliser
$bleu=imagecolorallocate($courbe, 0, 0, 255);
$ligne=imagecolorallocate($courbe, 220, 220, 220);
$fond=imagecolorallocate($courbe, 250, 250, 250);
$noir=imagecolorallocate($courbe, 0, 0, 0);
$rouge=imagecolorallocate($courbe, 255, 0, 0);
//Colorier le fond
imagefilledrectangle($courbe,0 , 0, $largeur, $hauteur, $fond);
//Tracer l'axe des abscisses
imageline($courbe, 50, $hauteur-$absis, $largeur-10,$hauteur-$absis, $noir);
//Tracer l'axe des ordonnées
imageline($courbe, 50,$hauteur-$absis,50,20, $noir);
//Decaler 10px vers le haut le si le minimum est différent de 0
if($min!=0)
{
    $absis+=10;
    $a=10;
}
//Nombres des grides verticales
$nbOrdonne=10;
//Calcul de l'echelle des abscisses
$echelleX=($largeur-100)/$i;
//Calcul de l'echelle des ordonnees
$echelleY=($hauteur-$absis-20)/$nbOrdonne;
$i=$min;
//Calcul des ordonnees des grides
$py=($max-$min)/$nbOrdonne;
$pasY=$absis;
while($pasY<($hauteur-19))
{
    //Affiche la valeur de l'ordonnee
    imagestring($courbe, 2,10 , $hauteur-$pasY-6, round($i), $noir);
    //Trace la gride
    imageline($courbe, 50, $hauteur-$pasY, $largeur-20,$hauteur-$pasY, $ligne);
    //Decaller vers le haut pour la prochaine gride
    $pasY+=$echelleY;
    //Valeur de l'ordonnee suivante
    $i+=$py;
}


$j=-1;
//Position du premier jour de mesure
$pasX=90;
//Parcourir le tableau pour le traçage du diagramme
foreach ($measureResult as $jour => $quantite) {
    //calculer la hauteur du point par rapport à sa valeur
    $y=($hauteur) -(($quantite -$min) * ($echelleY/$py))-$absis;
    //dessiner le point
    imagefilledellipse($courbe, $pasX, $y, 6, 6, $rouge);
    //Afficher le mois en français avec une inclinaison de 315°
    imagefttext($courbe, 10, 315, $pasX, $hauteur-$absis+20, $noir, $font_file, $measureDate[$jour]);
    //Tacer une ligne veticale de l'axe de l'abscisse vers le point
    //imageline($courbe, $pasX, $hauteur-$absis+$a, $pasX,$y, $noir);
    if($j!==-1)
    {
        //liée le point actuel avec le précédent
        imageline($courbe,($pasX-$echelleX),$yprev,$pasX,$y,$noir);
    }
    //Afficher la valeur au dessus du point
    imagestring($courbe, 2, $pasX-15,$y-14 , $quantite, $bleu);
    $j=$quantite;
    //enregister la hauteur du point actuel pour la liaison avec la suivante
    $yprev=$y;
    //Decaller l'abscisse suivante par rapport à son echelle
    $pasX+=$echelleX;
}
//Envoyer le flux de l'image
imagepng($courbe);
//Desallouer le memoire utiliser par l'image
imagedestroy($courbe);
?>
