<?php
require 'connect.php';
include('../fonctions/sql_functions.php');

if(isset($_GET['mail'])){
    echo $_GET['mail'];
    $_GET['mail'] = htmlspecialchars($_GET['mail']);
    $myMail = strip_tags($_GET['mail']);

    deleteUser($bdd, $myMail);
    echo 'succès';
    header('Location:updateUserStatus.php');

}