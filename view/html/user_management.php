<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="user_management.css"/>
    	<link rel="stylesheet" href="header.css"/>
		<title>Page gérer les utilisateur</title>
	</head>
	<body>
		<header>
		    <section>
		        <a href="Doyouwant.html">
		        <img src="./images/logoHeader.png" alt=""/>
		        </a>
		    </section>
		    <section class="navButtonContainer">
		        <div class="nav">
		            <button class="navButton" id="takeMeasures"><a href="measuring_home.html">Prendre des mesures</a></button>
		        </div>
		        <div class="nav">
		            <button class="navButton" id="mesurementAnalysis"><a href="Analyse_des_mesures.html">Analyse des résultats</a></button>
		        </div>
		        <div class="nav">
		            <button class="navButton" id="usersData"><a href="Gest_userData.html">Données des utilisateurs</a></button>
		        </div>
		        <div class="nav">
		            <button class="navButton backOfficeAdministrator"><a href="">Backoffice administrateur</a></button>
		            <div class="dropDownMenu dropAdmin">
		                <a class="downMenu" href="user_management.html">Gérer les utilisateurs</a>
		                <a class="downMenu" href="FAQ.html">Gérer la FAQ</a>
		                <a class="downMenu" href="messagerie.html">Gérer la messagerie</a>
		            </div>
		        </div>
		    </section>
		    <section>
		        <button class="option" ><a>Options</a></button>
		        <div class="dropDownMenu dropOption">
		            <a class="downMenu" href="edit_profile.html">Profil</a>
		            <a class="downMenu" href="home.html">Se déconnecter</a>
		        </div>
		    </section>
		</header>
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