<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<title>Données des utilisateurs</title>
	<link rel="stylesheet" href="../css/Gest_userData_style.css"/>
    </head>

    <main>

        <?php
        $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
        include($IPATH . "header.php"); ?>

        <div class="mini-text">
            <h2>Données des utilisateurs</h2>
                <div class="separator"></div>
        </div>
        <br>
        <!--menu déroulant
        <div id="raccourci">
            <nav role="navigation" class="primary-navigation">
                <ul>
                    <li><a href="#">Recherche par test</a>
                        <ul class="dropdown">
                            <li><a href="#">Fréquence cardiaque</a></li>
                            <li><a href="#">Reconnaissance de tonalité</a></li>
                            <li><a href="#">Mesure de température</a></li>
                            <li><a href="#">Temps de réaction</a></li>
                            <li><a href="#">Reconnaissance d'une lumière</a></li>
                        </ul>
                    </li>
                </ul>
            </nav> --> 
            <!--Barre de recherche-->
            <div class="searchBox">
                <input class="searchInput"type="text" name="" placeholder="Rechercher un utilisateur">
                <button class="searchButton" href="#">
                    <i class="material-icons">
                    </i>
                </button>
            </div>  
        </div>
        <br><br>
        <div id="rechercher">
            <div id="criteria">
                <section class="criteria-section">
                    <input type="checkbox" id="crit-age" >
                    <label class="label-criteria" for="section-age">Âge</label>
                    <ul>
                        <li>
                            <input type="radio" id="young" name="age" value="young" checked>
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
                    <input type="checkbox" id="crit-genre" >
                    <label class="label-criteria" for="section-genre">Genre</label>
                    <ul>
                        <li>
                            <input type="radio" id="man" name="genre" value="man" checked>
                            <label for="man">Homme</label>
                        </li>
                        <li>
                            <input type="radio" id="woman" name="genre" value="woman">
                            <label for="woman">Femme</label>
                        </li>        
                    </ul>
                </section>
                <section class="criteria-section">
                    <input type="checkbox" id="crit-date" >
                    <label class="label-criteria" for="section-date">Date</label>
                    <ul>
                        <li>
                            <input type="date" id="year" name="date" value="date" checked>
                            <label for="date"></label>
                        </li>
                        <li>
                            <input type="radio" id="year20" name="date" value="date2020" checked>
                            <label for="date2020">2020</label>
                        </li>
                        <li>
                            <input type="radio" id="year21" name="date" value="date2021">
                            <label for="date2021">2021</label>
                        </li>        
                    </ul>
                </section> 
                <section class="criteria-section">
                    <input type="checkbox" id="crit-test" >
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
            </div>
        </div>
        <div class="validation">
            <button type="submit">Valider</button>
        </div>
        
        <!--visualisation-->
        <div class="data-graph">
            <div>
                <table>
                    <caption>Liste utilisateurs</caption>
                    <thead>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ZHANG</td>
                            <td>Sophie</td>
                        </tr>
                        <tr>
                            <td>CHEAM</td>
                            <td>Léna</td>
                        </tr>
                        <tr>
                            <td>BERNARD</td>
                            <td>Rodolphe</td>
                        </tr>
                        <tr>
                            <td>KHALIL</td>
                            <td>Salem</td>
                        </tr>
                        <tr>
                            <td>NGO</td>
                            <td>Eddy</td>
                        </tr>
                        <tr>
                            <td>SIMON</td>
                            <td>Gauthier</td>
                        </tr>
                    
                    </tbody>
                </table>

            </div>
            <div id="graphic">
                <img id="image_graphique" src="images/test/graph.png">
            </div>
            <div id="table-graph">
                <div>
                    <table>
                        <caption>données</caption>
                        <thead>
                            <th>Catégorie</th>
                            <th>Moyenne (Bpm)</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>20-30</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>30-40</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <td>40-50</td>
                                <td>78</td>
                            </tr>
                            <tr>
                                <td>50-60</td>
                                <td>70</td>
                            </tr>
                            <tr>
                                <td>60+</td>
                                <td>65</td>
                            </tr>                            
                        </tbody>
                    </table>
    
                </div>
                
            </div>
        </div>
        <?php
        $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
        include($IPATH . "footer.php"); ?>
    </main>

</html>
