<?php

/*
 * try
{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=db;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
 */

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../view/css/mail.css"/>

    <meta charset="utf-8"/>
    <link rel="stylesheet" href=""/>
    <title>FAQ : Ajouter une question</title>
</head>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "header.php"); ?>

<body>

<div class="container">
    <h1>Ajouter une question</h1>
    <form method="post" action="../model/FAQ_add_post.php">

        <label for="questions">Question</label>
        <input id="questions" type="text" name="questions" placeholder="Votre question" required>

        <label for="réponses">Réponse</label>
        <textarea id="réponses" name="réponses" placeholder="Votre réponse" style="height:250px" required></textarea>

        <input type="submit" value="Ajouter" name="AddQuestion">
    </form>
</div>
</body>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php");
?>
</html>

