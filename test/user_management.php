<?php
    require '../model/connect.php';
    include 'function.php';
    //Recherche utilisateur
    if(isset($_POST['chercher'])){
        echo 'la recheche est ', $_POST['recherche'] ;
        $recherche = $_POST['recherche'];
        if ($recherche == ""||$recherche == "%"){
            echo " Veuillez rentrer un nom d'utilisateur. ";
        }else{
            echo ' résultat de la recherche ';
            $rep = researchUser($bdd,$recherche);

            foreach ($rep as $indexNumber=>$rowUser){
                echo "<td>" . $rowUser['userName'] . "</td>";
                echo "<td>" . $rowUser['userSurname'] . "</td>";
            }
        }
    }

    //Supprimer l'utilisateur
    if (isset($_POST['supprimer'])){
        delUser($bdd,$profil['email']);
        header("Location: user_management.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="../view/css/user_management.css"/>
    	<link rel="stylesheet" href="header.css"/>
		<title>Page gérer les utilisateur</title>
	</head>
	<body>
        <nav>
            <fieldset>Liste des utilisateur</fieldset>
            <div class="aligne">
                <?php
                    $allUsers  = userInformation($bdd);
                    foreach ($allUsers as $indexNumber=>$rowUser){
                        $email = $rowUser['email'];
                        //echo "<form method='post'> <input type=''> </form>";
                        echo "<td>" . $rowUser['nom'] . "</td>" . "<td>" . $rowUser['prenom'] . "</td>";
                        echo '</tr><br>';
                    }

                    $profil = donner($db,$_SESSION['email']);
                ?>
            </div>
        </nav>


		<article>
			<h1>Gestion des utilisateurs</h1>
			<p style="margin-left: 530px;border: 2px solid #1E4D6E;">
                <form method='post'>
                    <input type='text'  id='recherche' name='recherche' placeholder="Rechercher un utilisateur">
                    <input type='submit' name='chercher' value='chercher' >
                </form>
            </p><br>
            <?php
            if(isset($profil)){
                echo '<fieldset style="margin-left: 300px;">
                    <article class="colone">
                        <p>'.$profil['userName'].'</p><br>
                        <p>'.$profil['userSurname'].'</p><br>
                        <p>'.$profil['email'].'</p><br>
                        <p>'.$profil['status'].'</p><br>
    
                        <div class="aligne">
                            <form method="post">
                                <em>-</em><span>&ensp;<button type="submit" name="supprimer" value="Confirmer" onClick="Confirmer()" style="background: none;border: none">Supprimer l\'utilisateur</button></span><br>
                            </form>
                        </div>
                    </article>
                </fieldset>';
                }
            ?>
		</article>
	</body>
</html>

<script language='javascript'>
    function Confirmer()
    {
        if (confirm("Voulez vous vraiment supprimer cet utilisateur ?"))
        {
            formulaire.submit();
        }
    }
</script>