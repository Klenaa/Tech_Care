<?php
require '../model/connect.php';
include ('../fonctions/function_profile.php');
echo 'fbfb';
$profil = donner($bdd,$_SESSION['email']);
echo '2';
if(isset($_POST['modifier'])) {
    $hash = sha1($_POST['oldPass']);
    if ($hash != $profil['pass']) {
        echo '<script language="Javascript"> alert ("Le mot de passe renseigner est incorrect.") </script>';
    }elseif($hash == sha1($_POST['newPass'])){
        echo '<script language="JavaScript"> alert ("Votre nouveau mot de passe ne peut pas être identique à l\'ancien. Veuillez choisir un autre mot de passe.") </script>';
    }else{
        header('Location: ../model/modif_pass.php?mail=' . $profil['email'] . '&pass=' . sha1($_POST['pass']));
    }
}

echo "bfff";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Editer le profil</title>
    <link rel="stylesheet" href="../view/css/edit_profile.css"/>
    <script type="text/javascript" src="../view/javascript/validatePassword.js"></script>
</head>
<body>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "header.php"); ?>

<h1>Modifier le mot de passe</h1>
<div class="separator"></div>
<broly>
    <form method="post">
        <div class="contenant">
            <label for="pass">Ancien mot de passe</label>
            <input type="password" id="pass1" name="oldPass" placeholder="Ancien mot de passe" required><br>

            <label for="pass1">Nouveau mot de passe</label>
            <input type="password" id="pass" name="newPass" maxlength="50" placeholder="1 chiffre, 1 Majuscule, 1 minuscule, 1 caractère spécial, 8 caractères min" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&.])[A-Za-z\d@$!.%*?&]{8,}$" required><br>

            <label for="pass2">Confirmer votre mot de passe</label>
            <input type="password" id="pass2" name="confPass" maxlength="50" placeholder="1 chiffre, 1 Majuscule, 1 minuscule, 1 caractère spécial, 8 caractères min" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&.])[A-Za-z\d@$!.%*?&]{8,}$" required><br>

            <div class="multipleChoice">
                <button type="submit" id="modifier" name="modifier" maxlength="50" onclick="return Validate()">Modifier</button>  &ensp;
                <button type="submit" id="annuler" name="annuler">Annuler</button> <!--correction button ignorer les requireds-->
            </div>
        </div>
    </form>
</broly>

<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php"); ?>
</body>
</html>