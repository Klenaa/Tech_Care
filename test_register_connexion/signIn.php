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
            $_SESSION['status'] = $userinfo['status'];
            header("Location:function.php");
        } else {
            $erreur = "E-mail ou mot de passe incorrect !";
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
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "header.php"); ?>

<body>


    <form method="post" action="" id="global">

        <div class="inputs">
            <h2>Connexion</h2>
        <label for="email">E-mail</label><br>
        <input type="email" name="mail" placeholder="E-mail" />
<br>
        <label for="pass">Mot de passe</label><br>
        <input type="password" name="pass" placeholder="Mot de passe" />
        </div>
        <p class="inscription">
        Vous n'avez pas encore de compte? <a href="register.php"><span> Créez-en un !</span></a><br>
<br>
            <div class="bouton">
            <button type="submit" name="connexion">Se connecter</button>
        </div>
    </form>


<div class="erreur">

<?php
if(isset($erreur)) {
    echo $erreur;
}
?>
</div>
    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "footer.php");
    ?>
</body>
</html>