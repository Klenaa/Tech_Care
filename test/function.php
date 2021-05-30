<?php
$user = 'root';
$pass = 'root';
try{
    $bdd = new PDO('mysql:host=localhost;dbname=db;port=3307;',$user,$pass);
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

function userInformation($bdd){
    $rep = $bdd->query('SELECT email, userName, userSurname, status AS statut FROM users ORDER BY userName')->fetchAll();
    return $rep;
}

function updatePass($bdd,$pass,$email){
    $rep = $bdd->prepare('UPDATE users SET pass = ? WHERE email = ?');
    $rep->execute(array($pass, $email));
    return $rep;
}

function researchUser($bdd,$recherche){
    $rep = $bdd->prepare('SELECT userName, userSurname FROM users WHERE userName LIKE ? OR userSurname LIKE ?');
    $rep->execute(array("%".$recherche."%","%".$recherche."%"));
    return $rep;
}

function delUser($bdd,$email){
    $bdd->prepare('DELETE FROM users WHERE email=?')->execute(array($email));
}

function updateUserInfo($bdd,$name,$surname,$birthday,$gender,$address,$postalCode,$city,$country,$profession,$email){
    $rep = $bdd->prepare('UPDATE users SET userName = ?, userSurname = ?, birthday = ?, gender = ?, address = ?, postalCode = ?, city = ?, country = ?, profession = ? WHERE email = ?');
    $rep->execute(array($name, $surname, $birthday, $gender, $address, $postalCode, $city, $country, $profession, $email));
    return $rep;
}