<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="mail.css"/>
    <title>Contact</title>
</head>

<body>

<div class="container">
    <h1>Formulaire de contact</h1>
    <form method="post">

        <label for="emailAddress">E-mail</label>
        <input id="emailAddress" type="email" name="email" placeholder="Votre e-mail">

        <label for="sujet">Sujet</label>
        <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message" required>

        <label for="subject">Message</label>
        <textarea id="subject" name="message" placeholder="Votre message" style="height:250px" required></textarea>

        <input type="submit" value="Envoyer">
    </form>

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
            echo '<p>dommage</p>';
        }
    }
    ?>

</div>
</body>
</html>




