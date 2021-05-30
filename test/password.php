<?php
    require '../model/connect.php';
    include 'function.php';
    $profil = donner($bdd,$_SESSION['email']);
    if(isset($_POST['modifier'])){
        header('Location:modif_pass.php?mail=' . $profil['email'] . '&pass=' . sha1($_POST['pass']));
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Editer le profil</title>
        <link rel="stylesheet" href="../view/css/edit_profile.css"/>
        <script type="text/javascript" src="verification.js"></script>
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
                    <input type="password" id="pass" name="oldPass" placeholder="Ancien mot de passe" required><br>

                    <label for="pass1">Nouveau mot de passe</label>
                    <input type="password" id="pass1" name="newPass" maxlength="50" placeholder="Nouveau mot de passe" required><br>

                    <label for="pass2">Confirmer votre mot de passe</label>
                    <input type="password" id="pass2" name="confPass" maxlength="50" placeholder="Confirmation mot de passe" required><br>

                    <div class="multipleChoice">
                        <button type="submit" id="modifier" name="modifier" maxlength="50" onclick="return Verification('<?php echo $profil['pass'];?>')">Modifier</button>  &ensp;
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