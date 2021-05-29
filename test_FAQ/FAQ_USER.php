<?php
//require '../test_register_connexion/connect.php';//
try
{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=db;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("style.php"); ?>
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

            <section1>

                <div class="container">
                    <div class="accordion">
                        <?php
                        while ($donnees = $reponse->fetch())
                        {echo '<div class="accordion-item" id="' .$donnees['idQuestion']. '">
                  '.'<a class="accordion-link" href="#' .$donnees['idQuestion']. '">' . htmlspecialchars($donnees['questions']) . '</a>';

                            ;echo '<div class="answer"> <p> ' . htmlspecialchars($donnees['réponses']) .
                            '</p> </div> </div> ';

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
