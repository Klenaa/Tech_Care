<?php
        

        //Vérification de la validité des informations

        //Hachage du mot de passe
        $pass_hache = password_hash($_POST[test_password], PASSWORD_DEFAULT);

        //Insertion
        $req = $bdd->prepare('INSERT INTO testuser(test_mail, test_name, test_surname, test_birthday, test_password) VALUES(:test_mail, :test_name, :test_surname, :test_birthday, CURDATE())')

        $req->execute(array(
            'test_mail' => $test_mail,
            'test_name' => $test_name,
            'test_surname' => $test_surname,
            'test_birthday' => $test_birthday,
            'test_password' => $pass_hache));

        ?>