<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css"/>    
</head>

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

<main>
    <div class="box">
        <div class="mini-text">
            <h2>Contact</h2>
            <div class="separator"></div>
        </div>
        <div class="cgu">
            <article>

                <h3 class="articleTitle"> Pour toutes questions vous pouvez nous contacter</h3>
                <p><strong>Par mail :</strong> <br>
                <h5>Responsable technique</h5> rodolphe.bernard@eleve.isep.fr
                <h5>Project manager</h5> lena.cheam@eleve.isep.fr
                <h5>Responsable marketing</h5> salem.khalil@eleve.isep.fr
                <h5>Directeur adjoint</h5> eddy.ngo@eleve.isep.fr
                <h5>Responsable relations extérieures</h5> gauthier.simon@eleve.isep.fr
                <h5>Responsable des finances</h5> sophie.zhang@eleve.isep.fr
                </p>

                <p><strong>Par téléphone :</strong>
                <h5>Responsable technique</h5> 06...
                <h5>Project manager</h5> 06...
                <h5>Responsable marketing</h5> 06...
                <h5>Directeur adjoint</h5> 06...
                <h5>Responsable relations extérieures</h5> 06...
                <h5>Responsable des finances</h5> 06...
                </p>

            </article>
        </div>
    </div>
    </div>
    <?php include("footer.php"); ?>
</main>
</html>