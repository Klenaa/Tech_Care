<?php
    require '../../model/connect.php';
    include '../../test/function.php';
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
    <broly>
        <div class="conteneur">
            <ul>
                <li>Votre email : <?php echo $profil['email']?></li>
                <li>Votre date de naissance : <?php if(isset($_POST['birthday'])){ echo $_POST['birthday'];}else{ echo date( "d/m/Y" ,strtotime($profil['birthday']));}?></li>
                <li>Votre genre: <?php if(isset($_POST['gender'])){ echo $_POST['gender'];}else{ echo $profil['gender'];}?></li>
                <li>Votre adresse : <?php if(isset($_POST['address'])){ echo $_POST['address'];}else{ echo $profil['address'];}?></li>
                <li>Votre code postal: <?php if(isset($_POST['postalCode'])){ echo $_POST['postalCode'];}else{ echo $profil['postalCode'];}?></li>
                <li>Votre ville : <?php if(isset($_POST['city'])){ echo $_POST['city'];}else{ echo $profil['city'];}?></li>
                <li>Votre pays : <?php if(isset($_POST['country'])){ echo $_POST['country'];}else{ echo $profil['country'];}?></li>
                <li>Votre profession : <?php if(isset($_POST['profession'])){ echo $_POST['profession'];}else{ echo $profil['profession'];}?></li>
            </ul>
            <a href="../../test/editProfile.php">Editer son profil</a><br>
            <a href="../../test/password.php">Modifier le mot de passe</a><br>
            <?php
            if($profil['profession'] == "Médecin"&& $profil['status'] == "utilisateur"){
                echo '<a href=" ">Vous etes médecin? Souhaiter vous nous rejoindre et changer votre statut en gestionnaire?</a><br>';
            }
            ?>
        </div>
    </broly>

<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php"); ?>

</body>
</html>
