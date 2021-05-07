<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Page de test</h2>
        
        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php /* Insérer du code PHP ici */ ?>
            Voici quelques petits tests :
        </p>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
        
        
        <?php echo "Ceci est du texteeee"; 
        echo "Ceci est du texteeee"; 
        
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=db;port=3307;', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        //On récupère le contenu de la table user
        $reponse = $bdd->query('SELECT * FROM user');

        //On affiche chaque entrée une à une
        while ($donnees = $reponse->fetch())
        {
            echo '<p>' . $donnees['user_name'] .'<p>';
        }

        $reponse->closeCursor();//termine le traitement de la requête
        echo "Ceci est du texte euh "; 
        ?>


        

    <?php
        $req = $bdd->prepare('SELECT user_name, user_surname FROM user WHERE user_name = :user_name AND user_surname = :user_surname');
        $req->execute(array('user_name' => $_GET['user_name'], 'user_surname' => $_GET['user_surname']));
        $req->closeCursor();
        ?>

<?php
        $req = $bdd->prepare('SELECT user_name FROM user WHERE user_name = ? AND user_surname = ?');
        $req->execute(array($_GET['user_name'], $_GET['user_surname']));

        echo '<ul>';
        while($donnees = $req->fetch())
        {
            echo '<li>' . $donnees['user_name'] . ' ' . $donnees['user_surname'] .'</li>';
        }
        echo '<ul>';

        $req->closeCursor();
        ?>
        
    </body>
</html>