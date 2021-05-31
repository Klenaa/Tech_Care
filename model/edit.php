<?php
require 'connect.php';
include '../fonctions/function_profile.php';

if (isset($_POST['modification'])){
    $rep = updateUserInfo($bdd,$_POST['userName'], $_POST['userSurname'], $_POST['birthday'], $_POST['gender'], $_POST['address'], $_POST['postalCode'], $_POST['city'], $_POST['country'], $_POST['profession'], $_SESSION['email']);

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
    header("Location: ../view/html/profile.php");
    exit;
}
if(isset($_POST['annuler'])){
    header("Location: http://localhost/Tech_Care/view/html/profile.php");
    exit;
}

