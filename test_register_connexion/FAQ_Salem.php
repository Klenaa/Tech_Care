<?php
try
{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=faqs;charset=utf8', 'root', 'root');
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


<div id="faq">
    <?php
    try{
        echo 'Bonjour';
        $reponse = $bdd->query('SELECT * FROM faq');
        $va=$reponse->rowCount();
        $reponse->closeCursor();

    }
    catch (Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->query('SELECT * FROM faq');
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
    }
    ?>


</div>
</body>
</html>
