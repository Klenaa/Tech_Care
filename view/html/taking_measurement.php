<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<title>Prise d'une mesure</title>
	<link rel="stylesheet" href="taking_measurement.css"/>
    <link rel="stylesheet" href="header.css"/>
    </head>
    <main>
    	
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
        <!--Le stress-->
        
        <div class="mini-text">
            <h2>Mesurer son rythme cardiaque</h2>
            <div class="separator"></div>

        </div>
            <!--Article-->
		<div id="part2">
            <div id="performance">
				<div class="info-container png-container">
					<article>
						<h4 class="articleTitle">Notice d'utilisation</h4>
						<p> lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum
						lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
						lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum
						</p>
					</article>
					<article>
						<div class="info-box">
							<h4 class="articleTitle">Photo du capteur</h4>	
							<img id="image_capteur" class="pnj" src="images/lumiere.png">
						</div>
					</article>
					<article>
						<div class="info-box">
							<h4 class="articleTitle">Compte à rebours</h4>
							<img class="pnj" src="images/rebour.jpg">
						</div>
					</article>
				</div>
            </div>
        </div>
			<!--Bouton-->
		<div class="center">	
			<h4 class="bouton">Démarrage du test</h4>
        </div>
        <?php
        $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
        include($IPATH . "footer.php"); ?>
    </main>
</html>
