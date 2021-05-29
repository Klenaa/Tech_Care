<?php
require '../model/connect.php';
include 'function.php';

//Modifier profil
if (isset($_POST['modification'])){
    //Mettre a jour les information
    $rep = updateUserInfo($bdd,$_POST['userName'], $_POST['userSurname'], $_POST['birthday'], $_POST['gender'], $_POST['address'], $_POST['postalCode'], $_POST['city'], $_POST['country'], $_POST['profession'], $_SESSION['email']);

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
    $_SESSION['status'] = $_POST['status'];
    header("Location: profile.php");
    exit;
}
?>
