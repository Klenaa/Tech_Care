<?php
require 'connect.php';
include('../controller/register_functions.php');

//Envoie de mail
if(isset($_POST['sendMail']) && isset($_SESSION['email'])){
    sendCodeMail($_SESSION['codeVerification'], $_SESSION['email']);
    header('Location:../controller/registerVerification.php');
}
?>