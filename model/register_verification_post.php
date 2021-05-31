<?php
require 'connect.php';
include('../controller/register_functions.php');
//Confirmation du code de vérification

//Création variable erreur
$error_code = false;

if(isset($_POST['confirm'])) {
    //Sécurisation des entrées utilisateurs
    $_POST['verificationCode'] = strip_tags(htmlspecialchars($_POST['verificationCode']));

    //Vérification du code envoyé et du code entré
    if ($_SESSION['codeVerification'] == $_POST['verificationCode']) {
        $_SESSION['mailVerification'] = true;
        header('Location: ../view/html/doYouWant.php');
    }
    else{
        echo '<p>dommage, réessayez.</p>';
        $error_code = true;
        header('Location: ../controller/registerVerification.php?error_code=' . $error_code);

    }
}


?>