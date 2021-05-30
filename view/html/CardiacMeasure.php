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
						<p> Insérez votre index dans le cylindre noir et veuillez coller celui-ci à la plaque blanche
                            à l'opposé de la lumière. Une fois l'index bien appuyé contre le senseur blanc, appuyez sur
                            le bouton de compte à rebours pour démarrer la prise de votre pouls.
						</p>
					</article>
					<article>
						<div class="info-box">
							<h4 class="articleTitle">Photo du capteur</h4>	
							<img id="image_capteur" class="pnj" src="../images/cardiacCard.JPG">
						</div>
					</article>
					<article>
						<div class="info-box">
							<h4 class="articleTitle">Compte à rebours</h4>
                            <div id= "startButtons">
                                <button  class="bouton" id= "measureStart">Lancez le compte à rebours</button>
                            </div>
                            <div id= "countdown"></div>
                            <script>
                                document.getElementById("measureStart").addEventListener("click", function(){
                                    var timeleft = 3;

                                    var downloadTimer = setInterval(function function1(){
                                        document.getElementById("countdown").innerHTML = timeleft +
                                            "&nbsp"+"secondes restantes";

                                        timeleft -= 1;
                                        if(timeleft <= 0){
                                            clearInterval(downloadTimer);
                                            document.getElementById("countdown").innerHTML = "Temps écoulé!"
                                        }
                                    }, 1000);

                                    console.log(countdown);
                                });
                            </script>

                            <div id="cache" style="display: none;">
                                <a href="<?php echo $_GET['url']; ?>"> <?php echo $_GET['url']; ?></a>
                            </div>
						</div>
					</article>
				</div>
            </div>
        </div>

        <?php
        $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
        include($IPATH . "footer.php"); ?>
    </main>
</html>
