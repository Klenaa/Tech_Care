<?php
require '../model/connect.php';
include('../fonctions/register_functions.php');
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
    <?php
    echo 'hello ' . $_SESSION['email'] . " " . $_SESSION['codeVerification'];
    ?>
    <div class="container">
        <h1>Code de vérification</h1>
        <form method="post" action="../model/register_verification_post.php">
            <div class="multipleChoice">
                <label for="verificationCode">Entrer le code de vérification</label>
                <input type="password" id="verificationCode" name="verificationCode" required maxlength="50" placeholder="Code de vérification"><br>
            </div>
            <input type="submit" value="Confirmer" name="confirm">
            <?php
            if(isset($_GET['error_code']) && $_GET['error_code'] == true){
                echo "<p style='color: #8f0015'>Code Invalide</p>";
            }
            ?>
        </form>
    </div>

    <div class="container">
        <h1>Envoyer le mail à nouveau</h1>
        <form method="post" action="../model/register_verification_sendmail_post.php">
            <input type="submit" value="Envoyer" name="sendMail">
        </form>
    </div>
</div>
<?php


$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php");

?>