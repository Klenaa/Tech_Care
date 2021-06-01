<?php
//require '../test_register_connexion/connect.php';//
try
{
    $bdd = new PDO('mysql:host=localhost:3307;dbname=db;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <link rel="stylesheet" href="../css/FAQ_Salem.css"/>
    <meta charset="utf-8">
    <title>FAQ</title>
</head>
<body>
<div class="box">

    <p class="heading" id="titre">FAQ</p>
    <div id="faq">

        <?php
        try{

            $reponse = $bdd->query('SELECT * FROM faq');

            ?>
            <div class="lemsa" align="center" ><a href="../../controller/FAQ_add.php" style="text-decoration:none">Ajouter</a> des questions ? </div>
            <section1>

                <div class="container">
                    <div class="accordion">
                        <?php
                        foreach ($reponse as $indexQuestion=>$rowQuestion) {
                            $id='Supprimer'.$indexQuestion;
                            $id2='Modifer'.$indexQuestion;

                            $numero=$rowQuestion['idQuestion'];
                            echo '
                       <div class="accordion-item " id="' . $rowQuestion['idQuestion'] . '">'
                                . '<a class="accordion-link" href="#' . $rowQuestion['idQuestion'] . '"> ' . htmlspecialchars($rowQuestion['questions']) . '</a>';


                            echo '<div class="answer"> <p> ' . htmlspecialchars($rowQuestion['réponses']) .
                                '</p> <button type="submit"  name='.$id2.' class="lemsa1"><a href="../../test_FAQ/FAQ_EDIT.php?numFaq='.$rowQuestion['idQuestion'].'">Modifier</button> </a> 
                    
                    
                    
                    <button class= "lemsa2" type="submit" name=' .$id.' style="text-decoration: none" onclick="onDelete()">Supprimer </button> 
                    </div> </div> ';



                            if (isset($_POST[$id])) {
                                $bdd->prepare('DELETE FROM faq WHERE idQuestion=?')->execute(array($rowQuestion['idQuestion']));
                                header("Location: FAQ_Salem.php");
                                exit;

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
</body>



</html>