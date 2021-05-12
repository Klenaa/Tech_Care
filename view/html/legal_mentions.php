<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

    	<title>Mentions légales</title>
    	<link rel="stylesheet" href="cgu.css"/>  
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
        <div class="box">
            <div class="mini-text">
                <h2>Mentions légales</h2>
                <div class="separator"></div>
            </div>
            <div class="cgu">
                <article>
                    <h3 class="articleTitle">Article 1 : Règles de base</h3>
                    <p><strong>ADMISSIBILITE : </strong>  Pour utiliser la Plateforme, vous devez être majeur dans votre pays ou bénéficier d’une autorisation de votre représentant légal (parents, tuteur).
                         Des restrictions d’âge variables peuvent être applicables selon les pays pour certains services spécifiques de la Plateforme.
                    </p>  
                    <p>
                        <strong>REGLES D’INSCRIPTION :</strong>   Lorsque vous créez un compte auprès de nous, les règles suivantes sont applicables :
                        <li>
                            Soyez Exacts : Fournissez des informations exactes et à jour.
                        </li>
                        <li>
                            Veillez à votre Sécurité : Veillez à garder vos nom d’utilisateur, mot de passe, et identifiant de connexion en sécurité et n’autorisez personne d’autre que vous à utiliser votre compte.
                        </li>
                        <li>
                            Soyez Responsable : Informez immédiatement Tech Care de tout usage non autorisé de votre compte Tech Care. Vous êtes responsable de toute activité via votre compte – qu’elle ait été ou non autorisée par vos soins. DANS LA LIMITE DE LA LOI APPLICABLE, TECH CARE NE SERA RESPONSABLE D’AUCUNE PERTE OU ACTIVITE RESULTANT D’UN USAGE NON AUTORISE DE VOTRE COMPTE.
                        </li>
                    </p>
                </article>                               
            </div>
        </div>

        </div>
        <?php
        $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
        include($IPATH . "footer.php"); ?>
    </main>
        
</html>