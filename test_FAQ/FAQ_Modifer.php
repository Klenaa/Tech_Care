<?php
try
{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=db;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
$numero= $rowQuestion['idQuestion'];
if (isset($_POST['questions']) AND isset($_POST['réponses']) AND isset($_GET[$numero]))

{
    $requete=$bdd->prepare("UPDATE faq SET questions=?, réponses=? WHERE idQuestion=?");
    $requete->execute(array($_POST['questions'], $_POST['réponses'], $_GET[$numero]));
    header("Location: FAQ_Salem.php");
    ?>
<?php
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("styleFAQ_add.php"); ?>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href=""/>
    <title>FAQ : Modifier une question</title>
</head>

<div class="container">
    <h1>Modifier une question</h1>
    <form method="post">

        <label for="idQuestion">Question ID </label>
        <input id="idQuestion" type="text" name="idQuestion" placeholder="" required >

        <label for="questions">Question</label>
        <input id="questions" type="text" name="questions" placeholder="Votre question" required>

        <label for="réponses">Réponse</label>
        <textarea id="réponses" name="réponses" placeholder="Votre réponse" style="height:250px" required ></textarea>

        <input type="submit" value="Enregistrer les modifications" name="ModifierQuestion">
    </form>

</div>


</html>
