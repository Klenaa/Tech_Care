<?php
require 'connect.php';

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
            header("Location: function.php");
        } else {
            $erreur = "Mauvais mail ou mot de passe !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>
    <html>
    <head>
        <title>Se connecter</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../view/css/signIn.css"/>
    </head>
<body>
<broly>

    <form method="post" action="">

        <div class="inputs">
            <h2>Connexion</h2>
        <label for="email">E-mail</label>
        <input type="email" name="mail" placeholder="Mail" />

        <label for="pass">Mot de passe</label>
        <input type="password" name="pass" placeholder="Mot de passe" />
        </div>
        <p class="inscription">
        Vous n'avez pas encore de compte? <a href="register.php"><span> Créez-en un !</span></a><br>
<br>
            <button type="submit" name="connexion">Se connecter</button>
    </form>
</broly>

<?php
if(isset($erreur)) {
    echo $erreur;
}
?>


