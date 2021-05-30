<?php
//Connexion BDD
try {
    $bdd = new PDO('mysql:host=localhost;dbname=db;port=3307;', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

//Fonction fetch
function reqFetch($sql){
    $req = $bdd -> prepare($sql);
    $req -> execute();
    return $req-> fetchAll();
}


function reqUdpate($table, $item, $condition){
    $sql = "UPDATE ". $table . " SET " . $item . " WHERE " . $condition;
    $req = $bdd -> prepare($sql);
    return $req -> execute();
}

function selectOneID($table, $id){
    return reqFetch("SELECT * FROM " . $table . " WHERE idQuestion = " . $id);//[0];
}

//Fonction FAQ
function selectFAQ(){
    return reqFetch("SELECT * FROM faq");
}

//FAQ : ADD
function addFAQ($bdd, $question, $response){
    $req =$bdd->prepare('INSERT INTO faq(questions, réponses) VALUES(?,?)');

    $req->execute(array(
        $question,
        $response
    ));
    return $req;
}


//DELETE : user
function deleteUser($bdd, $user){
    $req = $bdd -> prepare('DELETE FROM users WHERE email=?');
    $req->execute(array($user));
    return $req;
}

?>

