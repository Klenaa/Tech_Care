<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<title>Prise d'une mesure</title>
	<link rel="stylesheet" href="../css/taking_measurement.css"/>
    </head>
    <main>
<<<<<<< Updated upstream

        <?php
        $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
        include($IPATH . "header.php"); ?>

=======
    	
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
		            <button class="navButton" id="usersData"><a href="../html/Gest_userData.php">Données des utilisateurs</a></button>
		        </div>
		        <div class="nav">
		            <button class="navButton backOfficeAdministrator"><a href="">Backoffice administrateur</a></button>
		            <div class="dropDownMenu dropAdmin">
		                <a class="downMenu" href="../html/user_management.php">Gérer les utilisateurs</a>
		                <a class="downMenu" href="../html/FAQ.php">Gérer la FAQ</a>
		                <a class="downMenu" href="../html/messagerie.php">Gérer la messagerie</a>
		            </div>
		        </div>
		    </section>
		    <section>
		        <button class="option" ><a>Options</a></button>
		        <div class="dropDownMenu dropOption">
		            <a class="downMenu" href="../html/edit_profile.php">Profil</a>
		            <a class="downMenu" href="../html/home.php">Se déconnecter</a>
		        </div>
		    </section>
		</header>
>>>>>>> Stashed changes
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
							<img id="image_capteur" class="pnj" src="../images/lumiere.png">
						</div>
					</article>
					<article>
						<div class="info-box">
							<h4 class="articleTitle">Compte à rebours</h4>
<<<<<<< Updated upstream
							<img class="pnj" src="../images/rebour.jpg">
=======
                            <script type="text/javascript" src="validatePassword.js"></script>
                            <button type="submit" id="register" name="register" value="Register" maxlength="50" onclick="return Validate()">Démarrer le compte à rebours</button>
                            <script>
                                var sec = 3;
                                function tick()
                                {
                                    document.getElementById('decompte').innerText = 'Il reste ' + sec + ' seconde(s)';

                                    if(sec == 0)
                                    {
                                        document.getElementById('decompte').innerText = 'Terminé !';
                                        document.getElementById('cache').style.display = 'block';
                                        window.clearInterval(timer);
                                    }

                                    sec--;
                                }
                                var timer = window.setInterval(tick, 1000);
                            </script>

                            <div id="decompte">Activez JavaScript</div>
                            <div id="cache" style="display: none;">
                                <a href="<?php echo $_GET['url']; ?>"> <?php echo $_GET['url']; ?></a>
                            </div>
                            <img class="pnj" src="../images/rebour.jpg">
>>>>>>> Stashed changes
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
