!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Données des utilisateurs</title>
    <link rel="stylesheet" href="../view/css/gest_user_data.css"/>

</head>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "header.php"); ?>

<main>


    <div class="mini-text">
        <h2>Données des utilisateurs</h2>
        <div class="separator"></div>
    </div>
    <br>
    <form method="post">
        <br><br>
        <div id="rechercher">
            <div id="criteria">
                <section class="criteria-section">
                    <input type="checkbox" id="crit-age" name="withAge" value="oui">
                    <label class="label-criteria" for="section-age">Âge</label>
                    <ul>
                        <li>
                            <input type="radio" id="kid" name="age" value="kid" checked>
                            <label for="kid">10-20 ans</label>
                        </li>
                        <li>
                            <input type="radio" id="young" name="age" value="young">
                            <label for="young">20-30 ans</label>
                        </li>
                        <li>
                            <input type="radio" id="young-adult" name="age" value="young-adult">
                            <label for="young-adult">30-40 ans</label>
                        </li>
                        <li>
                            <input type="radio" id="adult" name="age" value="adult">
                            <label for="adult">40-50 ans</label>
                        </li>
                        <li>
                            <input type="radio" id="senior" name="age" value="senior">
                            <label for="senior">50-60 ans</label>
                        </li>
                    </ul>
                </section>
                <section class="criteria-section">
                    <input type="checkbox" id="crit-genre" name="gender" value="oui">
                    <label class="label-criteria" for="section-genre">Genre</label>
                    <ul>
                        <li>
                            <input type="radio" id="man" name="genre" value="homme" checked>
                            <label for="man">Homme</label>
                        </li>
                        <li>
                            <input type="radio" id="woman" name="genre" value="femme">
                            <label for="woman">Femme</label>
                        </li>
                    </ul>
                </section>
                <section class="criteria-section">
                    <input type="checkbox" id="crit-date" name="dateMesure">
                    <label class="label-criteria" for="section-date">Date de mesure</label>
                    <ul>
                        <li>
                            <input type="date" id="year" name="date">
                            <label for="date"></label>
                        </li>
                    </ul>
                </section>
                <section class="criteria-section">
                    <input type="checkbox" id="crit-test" name="typeTest" >
                    <label class="label-criteria" for="section-date">Type de test</label>
                    <ul>
                        <li>
                            <input type="radio" id="cardio" name="test" value="cardio" checked>
                            <label for="cardio">Fréquence cardiaque</label>
                        </li>
                        <li>
                            <input type="radio" id="ton" name="test" value="ton">
                            <label for="ton">Reconnaissance de tonalité</label>
                        </li>
                        <li>
                            <input type="radio" id="temperature" name="test" value="temp">
                            <label for="temp">Mesure de température</label>
                        </li>
                        <li>
                            <input type="radio" id="reaction" name="test" value="react">
                            <label for="react">Temps de réaction</label>
                        </li>
                        <li>
                            <input type="radio" id="lux" name="test" value="lux">
                            <label for="lux">Reconnaissance d'une lumière</label>
                        </li>
                    </ul>
                </section>
                <section class="criteria-section">
                    <input type="checkbox" id="crit-test" name="profession" >
                    <label class="label-criteria" for="section-date">Profession</label>
                    <ul>
                        <li>
                            <input type="radio" id="student" name="work" value="student" checked>
                            <label for="student">Etudiant</label>
                        </li>
                        <li>
                            <input type="radio" id="engi" name="work" value="engi">
                            <label for="engi">Ingénieur</label>
                        </li>
                        <li>
                            <input type="radio" id="lawyer" name="work" value="lawyer">
                            <label for="lawyer">Avocat</label>
                        </li>
                        <li>
                            <input type="radio" id="doctor" name="work" value="doctor">
                            <label for="doctor">Médecin</label>
                        </li>
                        <li>
                            <input type="radio" id="mana" name="work" value="mana">
                            <label for="mana">Manager</label>
                        </li>
                        <li>
                            <input type="radio" id="cadre" name="work" value="cadre">
                            <label for="cadre">Cadre</label>
                        </li>
                    </ul>
                </section>
            </div>
        </div>

        <div class="validation">
            <input type="submit" id="bouton" name="bouton" value="Rechercher">
        </div>
    </form>

</main>

</html>




