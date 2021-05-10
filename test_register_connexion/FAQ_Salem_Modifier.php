<?php
try
{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=faqs;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>


<!DOCTYPE html>
<html>
<head>
    <?php include("style.php");?>
    <meta charset="utf-8">
    <title>Edition FAQ</title>
</head>
<body>


<!-- AJOUT DE QUESTION -->
<?php
if(isset($_POST['faq_modifier_bouton_add'])) //Si on a cliqué sur le bouton d'ajout de question
{
    $bdd->exec('INSERT INTO faq(question, reponse) VALUES(\'Question\', \'Réponse\')');
}
?>
<!-- FIN AJOUT DE QUESTIONS-->

<!-- MODIFICATION DE QUESTIONS -->
<?php
if(isset($_POST['faq_modifier_bouton_update']) AND isset($_POST['nombre_questions'])) //Si l'utilisateur a cliqué sur 'mettre à jour' et que la variable compteur existe bien
{
    print_r($_POST);
    for($i = 0; $i < (int) $_POST['nombre_questions']; $i++) //Boucle qui tourne autant de fois qu'il y a de questions envoyées par le formulaire. Le (int) convertit la variable 'compteur' en entier afin d'éviter que l'utilisateur ne mette ce qu'il veut à l'intérieur. (Par exemple, si l'utilisateur attribue à 'compteur' une chaine de caractère, compteur vaudra 0)
    {
        /* SUPPRESSION DE CERTAINES QUESTIONS */
        if(isset($_POST['supprimer_'.$i]) AND $_POST['supprimer_'.$i] == 1)
        {
            $bdd->query('DELETE FROM faq WHERE id = "'.$_POST['id_question_'.$i].'"'); //On supprime la question de la table 'faq'
        }
        /* FIN SUPPRESSION DE CERTAINES QUESTIONS */

        /* MODIFICATION DE CERTAINES QUESTIONS */
        else
        {
            $requete = $bdd->prepare('UPDATE faq SET question = :quest, reponse = :rep WHERE id = :d');
            $requete->execute(array(
                'quest' => $_POST['question_'.$i],
                'rep' => $_POST['reponse_'.$i],
                'd' => $_POST['id_question_'.$i]
            ));
        }
    }
}
?>
<!-- FIN MODIFICATION DE QUESTIONS-->


<!-- CONTENU PRINCIPAL DE LA PAGE -->

<?php
$reponse = $bdd->query('SELECT * FROM faq');
?>
<form id="faq_modifier_form" method="post" action="FAQ_Salem_Modifier.php">
    <?php
    for ($compteur=0; $donnees = $reponse->fetch(); $compteur++)
    {
        ?>
        <div class="faq_modifier_form_question">
            <label for="question <?php echo $compteur; ?> ">Question</label>
        </div>
        <input type="text" name="question_<?php echo $compteur;?>" id="question <?php echo $compteur;?>" value="<?php echo $donnees['question'];?>" size="60">

        <div class="faq_modifier_form_reponse">
            <label for="reponse <?php echo $compteur;?> ">Réponse</label>
        </div>

        <div class="faq_modifier_form_reponse_champ">
            <textarea name="reponse_<?php echo $compteur;?>" id="reponse <?php echo $compteur;?>" rows="5" cols="50"><?php echo $donnees['reponse'];?></textarea>
        </div>

        <label for="supprimer <?php echo $compteur;?> ">Supprimer ?</label>
        <input type="checkbox" name="supprimer_<?php echo $compteur;?>" id="supprimer <?php echo $compteur;?>" value="1">

        <input type="hidden" name="id_question_<?php echo $compteur; ?>" value="<?php echo $donnees['id'];?>" >
        <!-- Ces 2 inputs de type "hidden" permettent d'envoyer avec le formulaire l'id correspondant à ces questions dans la bdd, afin de savoir quelle question modifier/supprimer-->

        <?php
    }
    ?>

    <input type="hidden" name="nombre_questions" value=<?php echo $compteur; ?>>
    <!--Cet input de type "hidden" permet d'envoyer au script modifiant la bdd le nombre de questions que celle-ci comporte-->

    <div id="faq_modifier_boutons">
        <input id="faq_modifier_bouton_update" name="faq_modifier_bouton_update" type="submit" value="Mettre à jour">
        <input id="faq_modifier_bouton_add" name="faq_modifier_bouton_add" type="submit" value="Ajouter une question">
    </div>

</form>


</body>
</html>
