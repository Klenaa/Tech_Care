<?php
include('../view/html/mail_post.php');
?>

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





