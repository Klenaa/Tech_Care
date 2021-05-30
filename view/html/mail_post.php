<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../view/css/mail2.css"/>
    <title>Contact</title>
</head>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "header.php"); ?>

<body>

<div class="container">

    <form method="post" id="global">

        <div class="inputs">
            <h1>Formulaire de contact</h1>
            <label for="email">E-mail</label><br>
            <input id="emailAddress" type="email" name="email"><br>

            <label for="sujet">Sujet</label><br>
            <input type="text" id="sujet" name="sujet"  required><br>

            <label for="subject">Message</label><br>
            <textarea id="subject" name="message" style="height:250px" required></textarea>
        </div>
        <div class="bouton">
            <button type="submit">Envoyer</button>
        </div>
    </form>
</div>
</body>
</html>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php");
?>
