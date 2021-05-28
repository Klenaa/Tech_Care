<?php
require 'connect.php';
include('register_functions.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../view/css/registerVerification.css"/>
    <title>Vérifier votre adresse mail</title>
</head>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "header.php"); ?>
<body>
<div class="sideByside">
    <div class="container">
        <h1>Code de vérification</h1>
        <form method="post">
            <div class="multipleChoice">
                <label for="verificationCode">Entrer le code de vérification</label>
                <input type="password" id="verificationCode" name="verificationCode" required maxlength="50" placeholder="Code de vérification"><br>
            </div>
            <input type="submit" value="Confirmer" name="confirm">
        </form>
    </div>

    <div class="container">
        <h1>Envoyer le mail à nouveau</h1>
        <form method="post">
            <input type="submit" value="Envoyer" name="sendMail">
        </form>
    </div>
</div>
<?php
//Confirmation du code de vérification
if(isset($_POST['confirm'])) {
    if ($_SESSION['codeVerification'] == $_POST['verificationCode']) {
        header('Location: ../view/html/doYouWant.php');
    }
    else{
        echo '<p>dommage, réessayez.</p>';
    }
}
//Envoie de mail
if(isset($_POST['sendMail']) && isset($_SESSION['email'])){
    sendCodeMail($_SESSION['codeVerification'], $_SESSION['email']);
}

$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php");

?>