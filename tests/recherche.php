<?php
session_start();
//On se connecte à la basse de donnés
$user = 'root';
$pass = 'root';
try{
    $db = new PDO('mysql:host=localhost;dbname=db;port=3307;',$user,$pass);
    foreach ($db->query('SELECT * FROM users') as $row) {
        //print_r($row); //afficher tous les données de la table
    }
}catch(PDOExecption $e){
    print"Erreur:" . $e->getMessage() . "<br/>"; //Message d'erreur
    die;
}

if ($recherche=""){
    echo "Veuillez rentrer un nom d'utilisateur.";
}else{
    $query = "SELECT distinct count(lien) FROM users WHERE keyword LIKE \"%recherche%\" OR titre LIKE \"%$recherche%\"";
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Editer le profil</title>
    </head>
    <body>
        <form method='post' action='....' >
            <input type='text'  id='recherche' name='recherche'>
            <input type='submit' value='go' >
        </form>
    </body>
</html>