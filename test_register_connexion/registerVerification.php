<?php
require 'connect.php';
include('register_functions.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../test/mail.css"/>
    <title>Vérifier votre adresse mail</title>
</head>

<body>

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

<?php
if(isset($_POST['confirm'])) {
    echo 'vous avez appuyer sur send';
    if ($_SESSION['codeVerification'] == $_POST['verificationCode']) {
        echo '<p> BRAVO VOUS AVEZ REUSSI A VOUS INSCRIRE !</p>';
        //header('Location: function.php');
    }
    else{
        echo '<p>dommage, réessayez.</p>';
    }
}
if(isset($_POST['sendMail'])){
    sendCodeMail($_SESSION['codeVerification'], $_SESSION['email']);
    echo 'it is send !!';
}
?>