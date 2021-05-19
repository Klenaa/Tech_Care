<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="user_management.css"/>
    	<link rel="stylesheet" href="header.css"/>
		<title>Page gérer les utilisateur</title>
	</head>
	<body>
    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "header.php"); ?>
		<nav>
			<fieldset>Liste des utilisateur</fieldset>
			<div class="aligne"> Rodolphe Bernard<br>Léna Cheam<br>Eddy Ngo<br>Salem Khalil<br>Sophie Zhang<br>Gauthier Simon</div>
		</nav>
		<article>
			<h1>Gestion des utilisateurs</h1>
			<p style="margin-left: 530px;border: 2px solid #1E4D6E;">Nom utilisateur</p><br>
			<fieldset style="margin-left: 300px;">
				<article class="colone">
					<p>Nom</p><br>
					<p>Prénom</p><br>
					<p>Age</p><br>
					<p>Niveau d'étude</p><br>
					<p>Domaine d'étude</p><br>
					<p>Adresse</p><br>
					<p>Code postale</p><br>
					<p>Ville</p><br>
					<div class="aligne"><em>+</em><span>Ajouter l'utilisateur à un groupe</span><br><em>-</em><span>&ensp;Supprimer l'utilisateur</span></div><br>
				</article>
			</fieldset>
		</article>
        <?php
        $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
        include($IPATH . "footer.php"); ?>
	</body>
</html>