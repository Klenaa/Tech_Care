<?php
    require '../model/connect.php';
    include('../fonctions/function_profile.php');
    $profil = donner($bdd,$_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Editer le profil</title>
        <link rel="stylesheet" href="../view/css/edit_profile.css"/>
    </head>
    <body>
        <?php
        $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
        include($IPATH . "header.php"); ?>

        <h1>Modifier le Profil</h1>
        <div class="separator"></div>
        <broly>
            <form method="post" action="../model/edit.php">
                <div class="contenant">
                    <!--Information obligatoires à l'inscription-->
                    <label for="gender">Genre</label>
                    <?php if(isset($_POST['gender'])){$gender = $_POST['gender'];}else{$gender = $profil['gender'];}?>
                    <div class="multipleChoice">
                        <input type="radio" id="birthdayH" name="gender" value="Homme" <?php if("Homme" == $gender){echo "checked";}?>><label for="birthdayH">Homme</label>
                        <input type="radio" id="birthdayF" name="gender" value="Femme" <?php if("Femme" == $gender){echo "checked";}?>><label for="birthdayF">Femme</label>
                        <input type="radio" id="birthdayA" name="gender" value="Autre" <?php if("Autre" == $gender){echo "checked";}?>><label for="birthdayA">Autre</label><br>
                    </div>

                    <label for="email">email</label>
                    <input type="email" id="email" name="email" value="<?php echo $profil['email'];?>" readonly><br>

                    <label for="userName">Nom</label>
                    <input type="text" id="userName" name="userName" placeholder="Nom" maxlength="50" value="<?php if(isset($_POST['userName'])){ echo $_POST['userName'];}else{ echo $profil['userName'];}?>" required><br>

                    <label for="userSurname">Prénom</label>
                    <input type="text" id="userSurname" name="userSurname" placeholder="Prénom" required maxlength="50" value="<?php if(isset($_POST['userSurname'])){ echo $_POST['userSurname']; }else{ echo $profil['userSurname'];}?>" required><br>

                    <label for="profession">Profession</label>
                    <input type="text" id="profession" name="profession" placeholder="profession" value="<?php if(isset($_POST['profession'])){ echo $_POST['profession']; }else{ echo $profil['profession'];}?>"><br>

                    <label for="status">Type d'utilisateur</label>
                    <input type="text" id="status" name="email" value="<?php echo $profil['status'];?>" readonly><br>

                    <!--Information non obligatoires à l'inscription-->
                    <label for="birthday">Date de naissance</label>
                    <div class="multipleChoice">
                        <input type="date" id="birthday" name="birthday" value="<?php if(isset($_POST['birthday'])){ echo $_POST['birthday']; }else{ echo $profil['birthday'];}?>" required><br>
                    </div>

                    <label for="address">Adresse</label>
                    <input type="text" id="address" name="address" required maxlength="70" placeholder="Adresse" value="<?php if(isset($_POST['address'])){ echo $_POST['address']; }else{ echo $profil['address'];}?>"><br>

                    <label for="postalCode">Code Postal</label>
                    <input type="text" pattern="[0-9]{5}" id="postalCode" required name="postalCode" placeholder="code postal" value="<?php if(isset($_POST['postalCode'])){ echo $_POST['postalCode']; }else{ echo $profil['postalCode'];}?>"><br>

                    <label for="city">Ville</label>
                    <input type="text" id="city" name="city" required placeholder="Ville" value="<?php if(isset($_POST['city'])){ echo $_POST['city']; }else{ echo $profil['city'];}?>"><br>

                    <label for="country">Pays</label>
                    <?php if(isset($_POST['country'])){$country = $_POST['country'];}else{$country = $profil['country'];}?>
                    <select name="country" id="country">
                        <option value="France" <?php if("France" == $country){echo "selected";}?>>France</option>
                        <option value="Angleterre" <?php if("Angleterre" == $country){echo "selected";}?>>Angleterre</option>
                        <option value="Allemagne" <?php if("Allemagne" == $country){echo "selected";}?>>Allemagne</option>
                        <option value="Espagne" <?php if("Espagne" == $country){echo "selected";}?>>Espagne</option>
                        <option value="USA" <?php if("USA" == $country){echo "selected";}?>>USA</option>
                        <option value="Chine" <?php if("Chine" == $country){echo "selected";}?>>Chine</option>
                        <option value="Japon" <?php if("Japon" == $country){echo "selected";}?>>Japon</option>
                    </select>
                </div>

                <div class="multipleChoice">
                    <button type="submit" id="modifier" name="modification" value="Register" maxlength="50" onclick="return Validate()">Modifier</button> &ensp;
                    <button type="submit" id="annuler" name="annuler">Annuler</button>
                </div>
            </form>
        </broly>

        <?php
        $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
        include($IPATH . "footer.php"); ?>
    </body>
</html>