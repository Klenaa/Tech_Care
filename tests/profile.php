<?php 
	//On démarre une nouvelle session
    session_start();

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
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
    <link rel="stylesheet" href="profile.css"/>
    <title>Page profil</title>
</head>
<body>
    <h1>Profil de <?php echo $_SESSION['userName'],'&nbsp', $_SESSION['userSurname'];?></h1>
    <broly>
        <div class="conteneur">
            <ul>
                <li>Votre email : <?php echo $_SESSION['email']?></li>
                <li>Votre date de naissance : <?php if(isset($_POST['birthday'])){ echo $_POST['birthday'];}else{ echo date( "d/m/Y" ,strtotime($_SESSION['birthday']));}?></li>
                <li>Votre genre: <?php if(isset($_POST['gender'])){ echo $_POST['gender'];}else{ echo $_SESSION['gender'];}?></li>
                <li>Votre adresse : <?php if(isset($_POST['address'])){ echo $_POST['address'];}else{ echo $_SESSION['address'];}?></li>
                <li>Votre code postal: <?php if(isset($_POST['postalCode'])){ echo $_POST['postalCode'];}else{ echo $_SESSION['postalCode'];}?></li>
                <li>Votre ville : <?php if(isset($_POST['city'])){ echo $_POST['city'];}else{ echo $_SESSION['city'];}?></li>
                <li>Votre pays : <?php if(isset($_POST['country'])){ echo $_POST['country'];}else{ echo $_SESSION['country'];}?></li>
                <li>Votre profession : <?php if(isset($_POST['profession'])){ echo $_POST['profession'];}else{ echo $_SESSION['profession'];}?></li>
            </ul>
            <a href="editProfile.php">Editer son profil</a>
        </div>
    </broly>
</body>
</html>
