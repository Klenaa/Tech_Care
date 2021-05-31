<?php
require '../model/connect.php';
require '../view/html/sign_in_post.php';

if(isset($_POST['connexion'])) {
    $mail = htmlspecialchars($_POST['mail']);
    $pass = sha1($_POST['pass']);

    if(!empty($mail) AND !empty($pass)) {
        $requser = $bdd->prepare("SELECT * FROM users WHERE email = ? AND pass = ?");
        $requser->execute(array($mail, $pass));
        $userexist = $requser->rowCount();
        if($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['email'] = $userinfo['email'];
            $_SESSION['userName'] = $userinfo['userName'];
            $_SESSION['userSurname'] = $userinfo['userSurname'];
            $_SESSION['pass'] = $userinfo['pass'];
            $_SESSION['status'] = $userinfo['status'];
            header("Location:../view/html/doYouWant.php");
        } else {
            $erreur = "E-mail ou mot de passe incorrect !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>

