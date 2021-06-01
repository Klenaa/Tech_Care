<?php
require '../../model/connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../css/style.php"); ?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/FAQ_Salem.css"/>
    <title>FAQ</title>
</head>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "header.php"); ?>
<body>
<div class="box">
    <p class="heading" id="titre">FAQ</p>
    <div id="faq">

        <?php
        try{

            $reponse = $bdd->query('SELECT * FROM faq');

            ?>

            <section1>
                <div class="container">
                    <?php

                    if ($_SESSION['status']=='administrateur'){
                        echo '<div class="lemsa" align="center" ><a href="../../controller/FAQ_add.php" style="text-decoration:none">Ajouter</a> des questions ? </div>';


                    }
                    ?>


                    <div class="accordion">
                        <?php
                        foreach ($reponse as $indexQuestion=>$rowQuestion){

                            echo '
                       <div class="accordion-item " id="' . $rowQuestion['idQuestion'] . '">'
                                . '<a class="accordion-link" href="#' . $rowQuestion['idQuestion'] . '"> ' . htmlspecialchars($rowQuestion['questions']) . '</a>';;

                            echo '<div class="answer"> <p> ' . htmlspecialchars($rowQuestion['réponses']) . '</p> </div> </div> ';
                            if($_SESSION['status'] == 'administrateur'){
                                $id='Supprimer'.$indexQuestion;

                                echo '<form method="post"><br><br><button class= "lemsa2" type="submit" name="'.$id.'" style="text-decoration: none">Supprimer </button></form>';


                                if(isset($_POST[$id])) {
                                    $bdd->prepare('DELETE FROM faq WHERE idQuestion=?')->execute(array($rowQuestion['idQuestion']));
                                    //header("Location: FAQ_Salem.php");
                                    exit;
                                }
                            }

                        }
                        ?>
                    </div> </div> </section1>
            <?php
        }
        catch (Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        ?>
    </div>
</div>


</body>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php");
?>
</html>
