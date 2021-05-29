<?php
$user = 'root';
$pass = 'root';
try{
    $db = new PDO('mysql:host=localhost;dbname=db;port=3307;',$user,$pass);
}catch(PDOExecption $e){
    print"Erreur:" . $e->getMessage() . "<br/>"; //Message d'erreur
    die;
}

function donner($bdd,$email){
    $rep = $bdd->prepare('SELECT * FROM users WHERE email = ?');
    $rep->execute(array($email));
    $rep = $rep->fetch();
    return $rep;
}

function modifPass($bdd,$pass ,$email){
    $rep = $bdd->prepare('UPDATE user SET pass = ? WHERE email = ?');
    $rep->execute(array($pass, $email));
    $_SESSION['pass'] = $pass;
}

function researchUser($bdd,$recherche){
    $rep = $bdd->prepare('SELECT userName, userSurname FROM users WHERE userName LIKE ? OR userSurname LIKE ?');
    $rep->execute(array("%".$recherche."%","%".$recherche."%"));
    return $rep;
}

function delUser($bdd,$email){
    $bdd->prepare('DELETE FROM users WHERE email=?')->execute(array($email));
}