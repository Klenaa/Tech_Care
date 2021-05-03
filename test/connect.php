<?php
//Start the session
session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=db;port=3307;', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>