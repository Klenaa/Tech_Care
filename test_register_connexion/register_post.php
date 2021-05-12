<?php
    require 'connect.php';
    include('register_functions.php');
    


    //Condition du gestionnaire
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

            echo 'anniv : ' . $birthday . '<br>';
            echo 'anniv : ' . gender . '<br>';



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
                    $passwordHash*/
                ));

                //Elements de session importants
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['userName'] = $_POST['userName'];
                $_SESSION['userSurname'] = $_POST['userSurname'];
                $_SESSION['status'] = $_POST['status'];

                createCodeVerification();


                header('Location: registerVerification.php');
            }
        }
        elseif (isset($_POST['register']) && $_POST['pass'] != $_POST['pass2']){
                echo 'Vos mots de passe ne correspondent pas.';
                header('Location: register.php');
            }

       /*
        * //retrieve the field values from our registration form
           email, user_name, user_surname, pass
       $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
       $userName = !empty($_POST['userName']) ? trim($_POST['userName']) : null;
       $userSurname = !empty($_POST['userSurname']) ? trim($_POST['userSurname']) : null;
       $pass = !empty($_POST['pass']) ? trim($_POST['pass']) : null;
   
       
       //TO ADD : error checking (length, type, characters)
   
       //email already exists ?
       //SQL statement
       $sql = "SELECT COUNT(email) AS mail FROM users WHERE email = :email";
       $stmt = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
   
       //Bind the povided value (ici mail) to our prepared statement
       $stmt->bindValue(':email', $email);
   
       //Execute
       $stmt->execute();
   
       //Fetch the row
       $row = $stmt->fetch(PDO::FETCH_ASSOC);
   
       //If the provided value (ici mail) already exists - display error
       //TODO : handling error
       if($row['mail'] > 0){
           die('that email has already been registered !');
       }
   
       //Hash password
       $passwordHash = password_hash($pass, PASSWORD_DEFAULT);
   
       //Prepare our INSERT Statement
       $sql = "INSERT INTO users (email, userName, userSurname, pass) VALUES (:email, :userName, :userSurname, :pass)";
       $stmt = $bdd->prepare($sql);
   
       //Bind our variables
       $stmt->bindValue(':email', $email);
       $stmt->bindValue(':pass', $passwordHash);
   
       //Execute the statement and insert the new account
       $result = $stmt->execute();
   
       //If the signup process is a success
       if($result){
           echo 'Votre inscription a bien été prise en compte';
       }
   
   //}*/

$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php");
?>

