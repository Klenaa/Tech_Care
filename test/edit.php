<?php
require '../model/connect.php';

//Modifier profil
if (isset($_POST['modification'])){
    //Mettre a jour les information
    $rep = $bdd->prepare('UPDATE users SET userName = ?, userSurname = ?, birthday = ?, gender = ?, address = ?, postalCode = ?, city = ?, country = ?, profession = ? WHERE email = ?');
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
?>
