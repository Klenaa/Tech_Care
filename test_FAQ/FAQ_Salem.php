<?php
    require '../test_register_connexion/connect.php';
/*try
{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=faqs;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}*/
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("style.php"); ?>
    <meta charset="utf-8">
    <title>FAQ</title>
</head>
<body>


    <div id="faq">
        <?php
        try{
            echo 'Bonjour';
            $reponse = $bdd->query('SELECT * FROM faqs');
            echo 'Bonjour 2';
            while ($donnees = $reponse->fetch())
            {
                echo ' Bonjour dans la boucle';
                //TODO : mettre les balises HTML avec la concaténation .
                echo 'question  : ' . htmlspecialchars($donnees['questions']) . '  <br>  ';
                echo 'réponse  : ' . htmlspecialchars($donnees['réponses']) . '  -  ';
            }


        }
        catch (Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        /* Ton code de départ, j'ai enlevé les balises html et les nombreuses balises php, quand tu es sûr
        // A SUPPRIMER
        $reponse = $bdd->query('SELECT * FROM faqs');
        while ($donnees = $reponse->fetch())
        {
            ?>
            <p id="faq_question">
                <?php echo '<strong>'.$donnees['question'].'</strong>'; ?><br />
            </p>
            <p>
                <?php echo $donnees['reponse']; ?><br />
            </p>

            <?php
        }*/
        ?>


    </div>
</body>
</html>
