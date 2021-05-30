<?php
require '../model/connect.php';
include 'function.php';
if(isset($_GET['mail'])) {
    $_GET['mail'] = htmlspecialchars($_GET['mail']);
    $myMail = strip_tags($_GET['mail']);
    delUser($bdd,$myMail);
    header("Location: user_management.php");
    exit;
}
?>