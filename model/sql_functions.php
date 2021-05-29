<?php
include('../model/connect.php');

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
function addFAQ($bdd, $question, $reponse){
    $req =$bdd->prepare('INSERT INTO faq(questions, réponses) VALUES(?,?)');

    $req->execute(array(
        $question,
        $reponse
    ));

    return $req;
}


?>

