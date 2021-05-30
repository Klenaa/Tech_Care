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
        Vous n'avez pas encore de compte? <a href="../../controller/register.php"><span> Créez-en un !</span></a><br>
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