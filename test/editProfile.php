<?php
    //On démarre une session
    session_start();

    //On se connecte à la basse de donnés
    $user = 'root';
    $pass = 'root';
    try{
        $db = new PDO('mysql:host=localhost;dbname=db;port=3307;',$user,$pass);
        foreach ($db->query('SELECT * FROM users') as $row) {
            //print_r($row); //afficher tous les données de la table
        }
    }catch(PDOExecption $e){
        print"Erreur:" . $e->getMessage() . "<br/>"; //Message d'erreur
        die;
    }

    // On récupère les informations de l'utilisateur connecté
    $profil = $db->prepare('SELECT * FROM users WHERE email = ?');
    $profil->execute(array($_SESSION['email']));
    $profil = $profil->fetch();

    //Modifier profil
    if (isset($_POST['modification'])){
        //Mettre a jour les information
        $rep = $db->prepare('UPDATE users SET userName = ?, userSurname = ?, birthday = ?, gender = ?, address = ?, postalCode = ?, city = ?, country = ?, profession = ? WHERE email = ?');
        $rep->execute(array($_POST['userName'], $_POST['userSurname'], $_POST['birthday'], $_POST['gender'], $_POST['address'], $_POST['postalCode'], $_POST['city'], $_POST['country'], $_POST['profession'], $_SESSION['email']));

        //Recharge la session
        $_SESSION['userName'] = $_POST['userName'];
        $_SESSION['userSurname'] = $_POST['userSurname'];
        $_SESSION['birthday'] = $_POST['birthday'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['address'] = $_POST['address'];
        $_SESSION['postalCode'] = $_POST['postalCode'];
        $_SESSION['city'] = $_POST['city'];
        $_SESSION['country'] = $_POST['country'];
        $_SESSION['profession'] = $_POST['profession'];
        $_SESSION['status'] = $profil['status'];
        header("Location: profile.php");
        exit;
    }

    //Modifier mot de passe & vérification
    if (isset($_POST['changer']) && $_POST['antPass'] == $profil['pass'] && $_POST['newPass'] == $_POST['confPass']){
        if($profil['pass'] != $_POST['newPass']){
            $rep = $db->prepare('UPDATE user SET pass = ? WHERE email = ?');
            $rep->execute(array($_POST['newPass'], $_SESSION['email']));
            $_SESSION['pass'] = $_POST['newPass'];
            header('Location: edit.php');
            exit;
        }else{
            echo '<script language="Javascript"> alert ("Votre nouveau mot de passe ne peut pas être identique à l\'ancien.") </script>';
            exit;
        }
    }elseif (isset($_POST['changer']) && $_POST['antPass'] != $profil['pass']) {
        echo '<script language="Javascript"> alert ("Le mot de passe renseigner est incorrect.") </script>';
        exit;
    }elseif (isset($_POST['changer']) && $_POST['newPass'] != $_POST['confPass']) {
        echo '<script language="Javascript"> alert ("Vos mot de passe ne sont pas identique.") </script>';
        exit;
    }elseif (isset($_POST['changer']) && ($_POST['antPass'] != $profil['pass'] || $_POST['newPass'] != $_POST['confPass'])){
        echo '<script language="Javascript"> alert ("Vos mot de passe renseigner sont incorrect ou différent." ) </script>';
        exit;
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Editer le profil</title>
        <link rel="stylesheet" href="../view/css/editProfile.css"/>
    </head>
    <body>
        <h1>Modifier le Profil</h1>
        <div class="separator"></div>
        <broly>
            <form method="post">
                <div class="contenant">
                    <!--Information obligatoires à l'inscription-->
                    <div class="element-form">
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
                    </div>

                    <!--Information non obligatoires à l'inscription-->
                    <div class="element-form">
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
                </div>

                <button type="submit" id="annuler" name="annuler"><a href="edit.php" style="text-decoration: none; color:#fff;">Annuler<a></button>
                <button type="submit" id="modifier" name="modification" value="Register" maxlength="50" onclick="return Validate()">Modifier</button>

            </form>
        </broly>

        <broly>
            <div class="contenant">
                <div>
                    <h1>Modifier le mot de passe</h1>
                    <div class="separator"></div>
                    <div class="element-form">
                        <form method="post">
                            <label for="pass">Mot de passe</label>
                            <input type="password" id="pass" name="pass" required maxlength="50" placeholder="Mot de passe"><br>

                            <label for="pass2">Confirmer votre mot de passe</label>
                            <input type="password" id="pass2" name="pass2" required maxlength="50" placeholder="Confirmation mot de passe"><br>

                            <button type="submit" id="annuler" name="annuler"><a href="edit.php" style="text-decoration: none; color:#fff;">Annuler<a></button>
                            <button type="submit" id="modifier" name="modification" value="Register" maxlength="50" onclick="return Validate()">Modifier</button>
                        </form>
                    </div>
                </div>
                <div>
                    <h1>Demande de modification de statut</h1>
                    <div class="separator"></div>
                    <div class="element-form">
                        <form>
                            <label>Type d'utilisateur</label>
                            <?php if(isset($_POST['status'])){$gender = $_POST['status'];}else{$status = $profil['status'];}?>
                            <select name="status" id="status" required>
                                <option value="utilisateur" <?php if("utilisateur" == $status){echo "selected";}?>>Utilisateur</option>
                                <option value="gestionnaire" <?php if("gestionnaire" == $status){echo "selected";}?>>Gestionnaire (médecin)</option>
                                <option value="admin" <?php if("admin" == $status){echo "selected";}?>>Admin</option>
                            </select>
                            <button type="submit" id="envoyer" name="envoyer"><a href="edit.php" style="text-decoration: none; color:#fff; ">Envoyer demande<a></button>
                        </form>
                    </div>
                </div>
            </div>
        </broly>
    </body>
</html>