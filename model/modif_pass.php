<?php
require 'connect.php';
include '../fonctions/function_profile.php';

if(isset($_GET['mail']) && isset($_GET['pass'])) {
    $_GET['mail'] = htmlspecialchars($_GET['mail']);
    $myMail = strip_tags($_GET['mail']);
    $_GET['pass'] = htmlspecialchars($_GET['pass']);
    $newPass = strip_tags($_GET['pass']);
    updatePass($bdd, $newPass, $myMail);
    $_SESSION['pass'] = $newPass;
    header('Location: ../view/html/profile.php');
    exit;
}

if(isset($_POST['annuler'])){
    header("Location: ../controller/password.php");
    exit;
}