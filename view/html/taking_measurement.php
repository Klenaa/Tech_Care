<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<title>Prise d'une mesure</title>
	<link rel="stylesheet" href="../css/taking_measurement.css"/>
    </head>
    <main>

        <?php
        $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
        include($IPATH . "header.php"); ?>

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
							<img class="pnj" src="../images/rebour.jpg">
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
