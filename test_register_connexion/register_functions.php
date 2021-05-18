<?php
    require 'connect.php';

    echo 'Function test';
    echo 'Hello '. $_SESSION['userSurname'] . ' ET ' . $_SESSION['email'] ;

    function isEmailAlreadyRegistered($bdd, $emailToCheck){
        $reqMail = $bdd->prepare('SELECT email FROM users WHERE email = ?');
        $reqMail->execute(array($emailToCheck));           
        $emailCount = $reqMail->rowCount();
        
        if($emailCount == 0){
            echo ' <br> Cet email est nouveau.' . $emailCount .' email : ' . $emailToCheck ;
            return true; 
            header('Location: C:\MAMP\htdocs\Tech_Care\test_register_connexion\register_functions.php');
        }
        else {
            echo '<br> Ce mail est déjà enregistré. ' . $emailCount .' email : ' . $emailToCheck;
            return false;
        }
    }
    //RETURN AN ARRAY OF PROFESSION FROM BDD
    function getProfession($bdd){
        $results = array();
        $reponse = $bdd->query('SELECT professionName FROM profession'); //Contient toute la réponse de la requete
        while ($donnees = $reponse->fetch()){
            $results[] = htmlspecialchars(trim($donnees['professionName'])) ;
        }
        $reponse->closeCursor();
        return $results;
    }

    //RETURN AN ARRAY OF COUNTRY FROM BDD
    function getCountry($bdd){
        $results = array();
        $reponse = $bdd->query('SELECT countryName FROM country'); //Contient toute la réponse de la requete
        while ($donnees = $reponse->fetch()){
            $results[] = htmlspecialchars(trim($donnees['countryName'])) ;
        }
        $reponse->closeCursor();
        return $results;
    }

    //CODE DE VERIFICATION POUR CONFIRMATION DE MAIL
    function createCodeVerification(){
        $firstNumber = rand(10,99);
        $secondNumber = rand(10,99);
        $thirdNumber = rand(10,99);
        $codeVerification = (int)($firstNumber . $secondNumber . $thirdNumber);
        $_SESSION['codeVerification'] = $codeVerification;
        //echo $codeVerification;
        return $codeVerification;
    }

    //ENVOYER UN MAIL AVEC LE CODE DE CONFIRMATION
    function sendCodeMail($code, $emailUser){
        $entete = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $message = 'Votre inscription sur le site Tech Care a bien été pris en compte <br>
                            <b> avec l\'adresse mail suivante : </b>' . $emailUser . '<br> 
                            <b>Code de vérification : </b>' . $code;

        $retour = mail($emailUser, 'Mail de Vérification', $message, $entete);
        if ($retour) {
            echo '<p>Un mail de vérification a bien été envoyé.</p>';
        }
        else{
            echo '<p>Le mail ne s\'est pas encore envoyé.</p>';
        }
    }

    function sendConfirmationMail($emailUser){
        $entete = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $message = '<b>Votre inscription a bien été confirmée. <br>
                                 Votre mail : </b>' . $emailUser ;

        $retour = mail($emailUser, 'Mail de Vérification', $message, $entete);
        if ($retour) {
            echo '<p>Un mail de vérification a bien été envoyé.</p>';
        }
        else{
            echo '<p>Le mail ne s\'est pas encore envoyé.</p>';
        }
    }


    //$var = createCodeVerification();

    //sendCodeMail($var, 'lena.cheam@eleve.isep.fr');

    //session_destroy();
     /*while($dataMail = $reqMail->fetch()){
            echo '<br> Nombre Email : ' . (int)htmlspecialchars($dataMail['email']);
            array('email' => $_POST['email']*/

 ?>
