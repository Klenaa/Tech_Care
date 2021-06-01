<?php
require 'connect.php';
include("../fonctions/sql_functions.php");


if(isset($_POST['AddQuestion'])) //Si on a cliqué sur le bouton d'ajout de question
{

    addFAQ($bdd, $_POST['questions'], $_POST['réponses']);
    header('Location: ../view/html/FAQ_USER.php');
}


?>