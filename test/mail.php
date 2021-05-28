<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="mail2.css"/>
    <title>Contact</title>
</head>

<body>

<div class="container">

    <form method="post" id="global">

        <div class="inputs">
            <h1>Formulaire de contact</h1>
            <label for="email">E-mail</label><br>
            <input id="emailAddress" type="email" name="email"><br>

        <label for="sujet">Sujet</label><br>
            <input type="text" id="sujet" name="sujet"  required><br>

            <label for="subject">Message</label><br>
            <textarea id="subject" name="message" style="height:250px" required></textarea>
        </div>
        <div class="bouton">
            <button type="submit">Envoyer</button>
        </div>
    </form>
</div>
</body>
</html>






<?php
    if(isset($_POST['message'])) {
        $entete = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        /*$entete .= 'From: ' . $_POST['email'] . "\r\n"; (plus tard)
        A la place d'écrire le mail : $_SESSION['email'] */
        $message = '<b>Email : </b>' . $_POST['email'] . '<br> 
                <b>Sujet : </b>' . $_POST['sujet'] . '<br>
                <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('techcare.contact.us@gmail.com', 'Contact', $message, $entete);
        if ($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
        else{
            echo '<p>Votre message n\'a pas pu être envoyé.</p>';
        }
    }
    ?>





