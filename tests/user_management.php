<?php
    //On démarre une session
    session_start();

    $_SESSION['email']="lena.cheam@eleve.isep.fr";
    //On se connecte à la basse de donnés
    $user = 'root';
    $pass = 'root';
    try{
        $db = new PDO('mysql:host=localhost;dbname=db;port=3307;',$user,$pass);
        foreach ($db->query('SELECT * FROM users') as $row) {
            //print_r($row); //afficher tous les données de la table
        }
    }catch(PDOExecption $e){
        print"Erreur:" . $e->getMessage() . "<br/>"; //Message d'erreur
        die;
    }

    //Ajouter l'utilisateur à un groupe
    if (isset($_POST['ajouter'])){

    }

    //Supprimer l'utilisateur
    if (isset($_POST['supprimer'])){
        $db->prepare('DELETE FROM users WHERE email=?')->execute(array($_SESSION['email']));

    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="user_management.css"/>
    	<link rel="stylesheet" href="header.css"/>
		<title>Page gérer les utilisateur</title>
	</head>
	<body>
		<nav>
			<fieldset>Liste des utilisateur</fieldset>
			<div class="aligne"> Rodolphe Bernard<br>Léna Cheam<br>Eddy Ngo<br>Salem Khalil<br>Sophie Zhang<br>Gauthier Simon</div>
		</nav>
		<article>
			<h1>Gestion des utilisateurs</h1>
			<p style="margin-left: 530px;border: 2px solid #1E4D6E;"><?php echo $_SESSION['userName'],'&nbsp',$_SESSION['userSurname'] ?></p><br>
			<fieldset style="margin-left: 300px;">
				<article class="colone">
					<p><?php echo $_SESSION['userName'] ?></p><br>
					<p><?php echo $_SESSION['userSurname'] ?></p><br>
					<p><?php echo date( "d/m/Y" ,strtotime($_SESSION['birthday'])) ?></p><br>
					<p><?php echo $_SESSION['profession'] ?></p><br>
					<p ><?php echo $_SESSION['status'] ?></p><br>
					<p><?php echo $_SESSION['address'] ?></p><br>
					<p><?php echo $_SESSION['postalCode'] ?></p><br>
					<p><?php echo $_SESSION['city'] ?></p><br>
                    <p><?php echo $_SESSION['country'] ?></p><br>
                    <div class="aligne"><em>+</em><span><button type="button" name="ajouter" style="decoration: none">Ajouter l'utilisateur à un groupe</button></span><br><em>-</em><span>&ensp;<button type="button" name="supprimer" style="text-decoration: none">Supprimer l'utilisateur</button></span></div><br>
				</article>
			</fieldset>
		</article>
        <?php
        $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
        include($IPATH . "footer.php"); ?>
	</body>
</html>