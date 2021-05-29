<?php
    require 'connect.php';
    include('../controller/register_functions.php');

if(isset($_POST['register'])){
    if($_POST['pass'] != $_POST['pass2']){
        echo "Les mots de passe sont différents.";
        return false;
    }else {

            //Hash password
            $passwordHash = sha1($_POST['pass']);
            $pwd2 = ($_POST['pass']);
            $userName = htmlspecialchars(trim($_POST['userName']));
            $userSurname = htmlspecialchars(trim($_POST['userSurname']));
            $email = htmlspecialchars(trim($_POST['email']));


            //éléments optionnels lors du remplissage de l'insciption
            $birthday = !empty($_POST['birthday']) ? htmlspecialchars(trim($_POST['birthday'])) : null;
            $gender = !empty($_POST['gender']) ? htmlspecialchars(trim($_POST['gender'])) : null;
            $address = !empty($_POST['address']) ? htmlspecialchars(trim($_POST['address'])) : null;
            $postalCode = !empty($_POST['postalCode']) ? htmlspecialchars(trim($_POST['postalCode'])) : null;
            $city = !empty($_POST['city']) ? htmlspecialchars(trim($_POST['city'])) : null;
            $country = !empty($_POST['country']) ? htmlspecialchars(trim($_POST['country'])) : null;
            $profession = !empty($_POST['profession']) ? htmlspecialchars(trim($_POST['profession'])) : null;


            $req = $bdd->prepare("SELECT email FROM users WHERE email = ?");

            //Création variable d'erreur
            $mailDuplication = false;

            $req->execute(array($_POST['email']));
            $loginCount =  $req->rowCount();
            if($loginCount != 0){
                echo "Le login existe déjà !";
                $mailDuplication = true;
                header('Location: ../controller/register.php?mailDuplication=' . htmlspecialchars($mailDuplication));

                return false;
                } else {
                $mdp1HASH = sha1($_POST['pass']);
                addNewUser($bdd, $email, $userName, $userSurname, $mdp1HASH, $birthday, $gender, $address, $postalCode, $city, $country, $profession);
                echo "succès";

                //Elements de session importants
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['userName'] = $_POST['userName'];
                $_SESSION['userSurname'] = $_POST['userSurname'];
                $_SESSION['status'] = $_POST['status'];

                //Session non obligatoire à remplir après
                $_SESSION['birthday'] = $_POST['birthday'];
                $_SESSION['gender'] = $_POST['gender'];
                $_SESSION['address'] = $_POST['address'];
                $_SESSION['postalCode'] = $_POST['postalCode'];
                $_SESSION['city'] = $_POST['city'];
                $_SESSION['country'] = $_POST['country'];
                $_SESSION['profession'] = $_POST['profession'];

                //Mail vérifié ?
                $_SESSION['mailVerification'] = false;

                createCodeVerification();
                sendCodeMail($_SESSION['codeVerification'], $_SESSION['email']);


                header('Location: ../controller/registerVerification.php');
                return true;
            }
        }
    //$retour = addUser($_POST['login'], $_POST['mdp1'], $_POST['mdp2']);
}

/*
if((isset($_POST['register']) && $_POST['pass'] == $_POST['pass2']))
{
    //Hash password
    $passwordHash = sha1($_POST['pass']);
    $email = trim($_POST['email']);

    //éléments optionnels lors du remplissage de l'insciption
    $birthday = !empty($_POST['birthday']) ? trim($_POST['birthday']) : null;
    $gender = !empty($_POST['gender']) ? trim($_POST['gender']) : null;
    $address = !empty($_POST['address']) ? trim($_POST['address']) : null;
    $postalCode = !empty($_POST['postalCode']) ? trim($_POST['postalCode']) : null;
    $city = !empty($_POST['city']) ? trim($_POST['city']) : null;
    $country = !empty($_POST['country']) ? trim($_POST['country']) : null;
    $profession = !empty($_POST['profession']) ? trim($_POST['profession']) : null;



    //INSERT
    $req = $bdd->prepare('INSERT INTO users (email, userName, userSurname, pass, birthday, gender, address, postalCode, city, country, profession, status)
                                        VALUES (:email, :userName, :userSurname, :pass, :birthday, :gender, :address, :postalCode, :city, :country, :profession, :status)');

    if (isEmailAlreadyRegistered($bdd, $email)){

        //EXECUTE
        $req->execute(array(
            'email' => $_POST['email'],
            'userName' => $_POST['userName'],
            'userSurname' =>  $_POST['userSurname'],
            'pass' => $passwordHash,
            'birthday' => $birthday,
            'gender' => $gender,
            'address' => $address,
            'postalCode' =>$postalCode,
            'city' =>$city,
            'country' => $country,
            'profession' =>$profession,
            'status' =>'utilisateur'


            /* avec ?, ?, ?, ? dans la requete INSERT
            $_POST['email'],
            $_POST['userName'],
            $_POST['userSurname'],
            $passwordHash
        ));

        //Elements de session importants
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['userName'] = $_POST['userName'];
        $_SESSION['userSurname'] = $_POST['userSurname'];
        $_SESSION['status'] = $_POST['status'];

        //Session non obligatoire à remplir après
        $_SESSION['birthday'] = $_POST['birthday'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['address'] = $_POST['address'];
        $_SESSION['postalCode'] = $_POST['postalCode'];
        $_SESSION['city'] = $_POST['city'];
        $_SESSION['country'] = $_POST['country'];
        $_SESSION['profession'] = $_POST['profession'];

        //Mail vérifié ?
        $_SESSION['mailVerification'] = false;


        createCodeVerification();
        sendCodeMail($_SESSION['codeVerification'], $_SESSION['email']);


        header('Location: registerVerification.php');
    }
    else{
        echo 'Cet email existe déjà.';
        header('Location: register.php');
    }
}
elseif (isset($_POST['register']) && $_POST['pass'] != $_POST['pass2']){
    echo 'Vos mots de passe ne correspondent pas.';
    header('Location: register.php');
}

*/


$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/view/header_footer/';
include($IPATH . "footer.php");
?>

