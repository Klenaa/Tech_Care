<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/contact.css"/>
</head>

<main>
    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "header.php"); ?>
    <div class="box">
        <div class="mini-text">
            <h2>Contact</h2>
            <div class="separator"></div>
        </div>
        <div class="cgu">
            <article>

                <h3 class="articleTitle"> Pour toutes questions vous pouvez nous contacter</h3>
                <p><strong>Par mail :</strong> <br>
                <h5>Responsable technique</h5> rodolphe.bernard@eleve.isep.fr
                <h5>Project manager</h5> lena.cheam@eleve.isep.fr
                <h5>Responsable marketing</h5> salem.khalil@eleve.isep.fr
                <h5>Directeur adjoint</h5> eddy.ngo@eleve.isep.fr
                <h5>Responsable relations extérieures</h5> gauthier.simon@eleve.isep.fr
                <h5>Responsable des finances</h5> sophie.zhang@eleve.isep.fr
                </p>

                <p><strong>Par téléphone :</strong>
                <h5>Responsable technique</h5> 06...
                <h5>Project manager</h5> 06...
                <h5>Responsable marketing</h5> 06...
                <h5>Directeur adjoint</h5> 06...
                <h5>Responsable relations extérieures</h5> 06...
                <h5>Responsable des finances</h5> 06...
                </p>

            </article>
        </div>
    </div>
    </div>
    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "footer.php"); ?>
</main>
</html>