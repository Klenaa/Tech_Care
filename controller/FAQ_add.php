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

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("styleFAQ_add.php"); ?>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href=""/>
    <title>FAQ : Ajouter une question</title>
</head>

<body>

<div class="container">
    <h1>Ajouter une question</h1>
    <form method="post">

        <label for="questions">Question</label>
        <input id="questions" type="text" name="questions" placeholder="Votre question" required>

        <label for="réponses">Réponse</label>
        <textarea id="réponses" name="réponses" placeholder="Votre réponse" style="height:250px" required></textarea>

        <input type="submit" value="Ajouter" name="AddQuestion">
    </form>

</div>

<!-- AJOUT DE QUESTION -->
<?php
if(isset($_POST['AddQuestion'])) //Si on a cliqué sur le bouton d'ajout de question
{

    $req =$bdd->prepare('INSERT INTO faq(questions, réponses) VALUES(?,?)');


    $req->execute(array(
        $_POST['questions'],
        $_POST['réponses']
    ));


    header('Location: FAQ_Salem.php');
}


?>