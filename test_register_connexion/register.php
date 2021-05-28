<?php
    require 'connect.php';
    include('register_functions.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>S'inscrire</title>
        <link rel="stylesheet" href="../view/css/register.css"/>
        <script type="text/javascript" src="validatePassword.js"></script>
    </head>
    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "header.php"); ?>
    <body>

        <h1>S'inscrire</h1>
        <div class="separator"></div>
        <broly>
            <form action="register_post.php" method="post">
                <div class="contenant">
                    <!--Information obligatoires à l'inscription-->

                    <?php
                    if(isset($_GET['mailDuplication']) && htmlspecialchars($_GET['mailDuplication']) == true){
                        echo '<p class="msg" style="color: red">Ce mail existe déjà.</p>';
                    }
                    ?>
                        <label for="email">Email*</label>

                        <input type="email" id="email" name="email" required maxlength="50" placeholder="jean.dupont@gmail.com"><br>
                        <span id="MSG"></span>

                        <label for="userName">Nom*</label>
                        <input type="text" id="userName" name="userName" required maxlength="50" placeholder="Dupont"><br>

                        <label for="userSurname">Prénom*</label>
                        <input type="text" id="userSurname" name="userSurname" required maxlength="50" placeholder="Jean"><br>

                        <label for="pass">Mot de passe*</label>
                        <input type="password" id="pass" name="pass" required maxlength="50" placeholder="1 chiffre, 1 Majuscule, 1 minuscule, 1 caractère spécial, 8 caractères min" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&.])[A-Za-z\d@$!.%*?&]{8,}$"><br>


                        <label for="pass2">Confirmer votre mot de passe*</label>
                        <input type="password" id="pass2" name="pass2" required maxlength="50" placeholder="Confirmation mot de passe" onclick="ValidateMDP()"><br>
                        <span id="msgMDP"></span>
                    
                    <!--Information non obligatoires à l'inscription-->
                        <label for="birthday">Date de naissance</label>
                        <div class="multipleChoice">
                            <input type="date" id="birthday" name="birthday"><br>
                        </div>

                        <label for="gender">Genre</label>
                        <div class="multipleChoice" id="gender">
                            <input type="radio" id="birthdayH" name="gender" value="homme"><label for="birthdayH">Homme</label>
                            <input type="radio" id="birthdayF" name="gender" value="femme"><label for="birthdayF">Femme</label><br>
                        </div>

                        <label for="address">Adresse</label>
                        <input type="text" id="address" name="address" maxlength="70" placeholder="1 rue de Paris"><br>

                        <label for="postalCode">Code Postal</label>
                        <input type="text" pattern="[0-9]{5}" id="postalCode" name="postalCode" placeholder="75001"><br>

                        <label for="city">Ville</label>
                        <input type="text" id="city" name="city" placeholder="Paris"><br>

                        <label for="country">Profession</label>
                        <input type="text" id="country" name="country" maxlength="70" placeholder="France"><br>



                        <!--<label for="profession">Profession</label>
                            <?php /*$professionArray = getProfession($bdd);?>
                                <select name="profession" id="profession">
                                    <?php
                                    //foreach($professionArray as $job) {
                                        //echo '<option value=' . trim($job) . '>' . trim($job) . '</option>' ;
                                    }
                                    */?>
                                </select>-->

                        <label for="profession">Profession</label>
                        <input type="text" id="profession" name="profession" maxlength="70" placeholder="Ingénieur"><br>

                </div>
                <div class="multipleChoice">
                    <input type="checkbox" name="conditions" id="conditions" required><label>Je déclare accepter les <a href="../view/html/cgu.php" style="color:dodgerblue">Conditions Générales d'Utilisation</a>
                    </label>
                </div>


                <div id="divButton">
                    <button type="submit" id="register" name="register" value="Register" maxlength="50" onclick="return Validate()">S'inscrire</button>
                </div>
            </form>
        </broly>
        <?php
            $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
            include($IPATH . "footer.php");
        ?>
    </body>
</html>

<?
    /*
    //$register exist => registration form submitted
    //on récupère tout le contenu de la table users (pour vérifier le contenu de la bdd)
    $reponse = $bdd->query('SELECT * FROM users'); //Contient toute la réponse de la requete

    //On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
        echo '<br>';
        echo 'Email : ' . htmlspecialchars($donnees['email']) . '  -  ';
        echo 'userName : ' . htmlspecialchars($donnees['userName']) . '  -  ';
        echo 'userSurname : ' . htmlspecialchars($donnees['userSurname']) . '  -  ';
        echo 'password : ' . htmlspecialchars($donnees['pass']) . '<br>';
    }
    $reponse->closeCursor(); //Termine le traitement de la requête*/
    
?>

