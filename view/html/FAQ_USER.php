<?php
require '../../model/connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../css/style.php"); ?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/FAQ_Salem.css"/>
    <title>FAQ</title>
</head>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "header.php"); ?>
<body>
<div class="box">
    <p class="heading" id="titre">FAQ</p>
    <div id="faq">

        <?php
        try{

            $reponse = $bdd->query('SELECT * FROM faq');

            ?>

            <section1>
                <div class="container">
                    <div class="accordion">
                        <?php
                        while ($donnees = $reponse->fetch())
                        {
                            echo '
                       <div class="accordion-item " id="' . $donnees['idQuestion'] . '">'
                                . '<a class="accordion-link" href="#' . $donnees['idQuestion'] . '"> ' . htmlspecialchars($donnees['questions']) . '</a>';;

                            echo '<div class="answer"> <p> ' . htmlspecialchars($donnees['réponses']) . '</p> </div> </div> ';

                        }
                        ?>
                    </div> </div> </section1>
            <?php
        }
        catch (Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        ?>
    </div>
</div>


</body>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php");
?>
</html>
