<?php
    require '../../model/connect.php';
    include '../../fonctions/function_profile.php';
    $profil = donner($bdd,$_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
    <link rel="stylesheet" href="../css/profile.css"/>
    <title>Page profil</title>
</head>
<body>

<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "header.php"); ?>

    <h1>Profil de <?php echo $profil['userName'],'&nbsp', $profil['userSurname'];?></h1>
    <div class="separator"></div>
    <broly>
        <div class="conteneur">
            <ul id="profil">
                <li style="margin-top: 10px"><label>Votre email :</label> <?php echo $profil['email']?></li>
                <li><label>Votre date de naissance :</label> <?php if(isset($_POST['birthday'])){ echo $_POST['birthday'];}else{ echo date( "d/m/Y" ,strtotime($profil['birthday']));}?></li>
                <li><label>Votre genre:</label> <?php if(isset($_POST['gender'])){ echo $_POST['gender'];}else{ echo $profil['gender'];}?></li>
                <li><label>Votre adresse :</label> <?php if(isset($_POST['address'])){ echo $_POST['address'];}else{ echo $profil['address'];}?></li>
                <li><label>Votre code postal:</label> <?php if(isset($_POST['postalCode'])){ echo $_POST['postalCode'];}else{ echo $profil['postalCode'];}?></li>
                <li><label>Votre ville :</label> <?php if(isset($_POST['city'])){ echo $_POST['city'];}else{ echo $profil['city'];}?></li>
                <li><label>Votre pays :</label> <?php if(isset($_POST['country'])){ echo $_POST['country'];}else{ echo $profil['country'];}?></li>
                <li><label>Votre profession :</label> <?php if(isset($_POST['profession'])){ echo $_POST['profession'];}else{ echo $profil['profession'];}?></li>
            </ul>

            <div class="multipleChoice">
            <a href="../../controller/editProfile.php">Editer son profil</a> &emsp;
            <a href="../../controller/password.php">Modifier le mot de passe</a> &emsp;
            <?php
            if($profil['profession'] == "Médecin"&& $profil['status'] == "utilisateur"){
                echo '<p>Vous êtes médecin? Devenez gestionnaire <a href="../../controller/mail.php">ici</a></p>&emsp;';
                //TODO : faire une page mail pour demande level up de statut
            }
            if($_SESSION['mailVerification'] = false){
                echo '<p>Confirmer votre email <a href="../../controller/registerVerification.php">ici</a></p>';
            }
            ?>
            </div>

        </div>
    </broly>

<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php"); ?>

</body>
</html>
