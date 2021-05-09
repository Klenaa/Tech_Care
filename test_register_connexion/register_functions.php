<?php
    require 'connect.php';

    echo 'Function test';
    echo 'Hello '. $_SESSION['userName'] . ' ET ' . $_SESSION['email'] ;

    function isEmailAlreadyRegistered($bdd, $emailToCheck){
        $reqMail = $bdd->prepare('SELECT email FROM users WHERE email = ?');
        $reqMail->execute(array($emailToCheck));           
        $emailCount = $reqMail->rowCount();
        
        if($emailCount == 0){
            echo ' <br> Cet email nouveau.' . $emailCount .' email : ' . $emailToCheck ;
            return true; 
            header('Location : register_functions.php');
        }
        else {
            echo '<br> already registered. ' . $emailCount .' email : ' . $emailToCheck;
            return false;
        }
    }
    //session_destroy();
     /*while($dataMail = $reqMail->fetch()){
            echo '<br> Nombre Email : ' . (int)htmlspecialchars($dataMail['email']);
            array('email' => $_POST['email']*/

 ?>
