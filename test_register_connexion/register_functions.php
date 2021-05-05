<?php
    require 'connect.php';

    echo 'Function test';
    function isEmailAlreadyRegistered($bdd, $emailToCheck){
        $reqMail = $bdd->prepare('SELECT COUNT(email) AS email FROM users WHERE email = ?');
        $reqMail->execute(array($emailToCheck));           
        $emailCount = $reqMail->rowCount();
        
        if($emailCount > 0){
            echo ' <br> Cet email a déjà été enregistré.';
            return false; 
            header('Location : register_functions.php');
        }
        else {
            echo 'cet email not yet enregistreed';
            return true;
        }
    }
    
     /*while($dataMail = $reqMail->fetch()){
            echo '<br> Nombre Email : ' . (int)htmlspecialchars($dataMail['email']);
            array('email' => $_POST['email']*/
        
?>