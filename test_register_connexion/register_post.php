<?php
    require 'connect.php';
    include('register_functions.php');
    

     
        if(isset($_POST['register']) && $_POST['pass'] == $_POST['pass2'])
        {
            //Hash password
            $passwordHash = password_hash(trim($_POST['pass']), PASSWORD_DEFAULT);
            $email = trim($_POST['email']);
        
            //INSERT 
            $req = $bdd->prepare('INSERT INTO users (email, userName, userSurname, pass) VALUES (:email, :userName, :userSurname, :pass)');
            
            if (isEmailAlreadyRegistered($bdd, $email)){

                //EXECUTE
                $req->execute(array(
                    'email' => $_POST['email'],
                    'userName' => $_POST['userName'],
                    'userSurname' =>  $_POST['userSurname'],
                    'pass' =>$passwordHash

                    /* avec ?, ?, ?, ? dans la requete INSERT
                    $_POST['email'],
                    $_POST['userName'],
                    $_POST['userSurname'],
                    $passwordHash*/
                ));
            header('Location: register.php');
            }          
        }elseif (isset($_POST['register']) && $_POST['pass'] != $_POST['pass2']){
                echo 'Vos mots de passe ne correspondent pas.';
                header('Location: register.php');
            }
        
            
        
           //retrieve the field values from our registration form
       /*
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
       }*/
   
   //}


?>