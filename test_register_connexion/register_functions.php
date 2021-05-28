<?php
    require 'connect.php';

    echo 'Function test';
    echo 'Hello '. $_SESSION['userSurname'] . ' ET ' . $_SESSION['email'] ;

    //Requête SQL Insert INSCRIPTION

    function addNewUser($bdd, $email, $userName, $userSurname, $pass, $birthday, $gender, $address, $postalCode, $city, $country, $profession){
        $status = 'utilisateur';
        $req = $bdd->prepare('INSERT INTO users (email, userName, userSurname, pass, birthday, gender, address, postalCode, city, country, profession, status) 
                                        VALUES (:email, :userName, :userSurname, :pass, :birthday, :gender, :address, :postalCode, :city, :country, :profession, :status)');
        $req->execute(array(
            'email' => $email,
            'userName' => $userName,
            'userSurname' =>  $userSurname,
            'pass' => $pass,
            'birthday' => $birthday,
            'gender' => $gender,
            'address' => $address,
            'postalCode' =>$postalCode,
            'city' =>$city,
            'country' => $country,
            'profession' =>$profession,
            'status' =>$status

            /* avec ?, ?, ?, ? dans la requete INSERT
            $_POST['email'],
            $_POST['userName'],
            $_POST['userSurname'],
            $passwordHash*/
        ));
        return $req;

    }



    //Mail déjà enregistré ?
    function isEmailAlreadyRegistered($bdd, $emailToCheck){
        $reqMail = $bdd->prepare('SELECT email FROM users WHERE email = ?');
        $reqMail->execute(array($emailToCheck));
        $emailCount = $reqMail->rowCount();

        if($emailCount == 0){
            echo ' <br> Cet email est nouveau.' . $emailCount .' email : ' . $emailToCheck ;
            return 0;
        }
        else {
            echo '<br> Ce mail est déjà enregistré. ' . $emailCount .' email : ' . $emailToCheck;
            return 1;

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
