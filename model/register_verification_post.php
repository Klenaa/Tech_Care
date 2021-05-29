<?php
//Confirmation du code de vérification
if(isset($_POST['confirm'])) {
    //Sécurisation des entrées utilisateurs
    $_POST['verificationCode'] = strip_tags(htmlspecialchars($_POST['verificationCode']));

    if ($_SESSION['codeVerification'] == $_POST['verificationCode']) {
        $_SESSION['mailVerification'] = true;
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

?>