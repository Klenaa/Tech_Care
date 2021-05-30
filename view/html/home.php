<?php
session_start();
if($_SESSION['langue'] == ""){
    $_SESSION['langue'] = 'français';
}

echo $_SESSION['langue'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<title>Accueil</title>
	<link rel="stylesheet" href="../css/home.css"/>
    </head>

    <main>

        <?php
        $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
        include($IPATH . "header.php"); ?>

        <!--SLIDER-->
        <div class="slider-container">
            <div class="slider fade">
                <img class="slider-img bg-overlay" src="../images/peaceful.jfif">
                <blockquote class="text">
                    <?php
                    if($_SESSION['langue'] == 'français'){

                        ?>
                    Le stress modifie le tempérament d'une personne :<br>il en fait un être désorienté.
                    <cite><br><br>Amoe Abbassi, écrivain ingénieur</cite>
                    <?php
                    }
                    ?>
                    <?php
                    if($_SESSION['langue'] == 'english'){
                        ?>
                        Stress changes a person's temperament: <br> it turns them into a disoriented being.
                        <cite> <br> <br> Amoe Abbassi, engineer writer </cite>
                    <?php
                        }

                    ?>

                </blockquote>
            </div>
            <div class="slider fade">
                <img class="slider-img bg-overlay" src="../images/peaceful.jfif">
                <blockquote class="text">
                    <?php
                    if($_SESSION['langue'] == 'français'){

                    ?>
                    En cas de stress extrême, le corps se met aux commandes<br>et fait ce qu'il a à faire pendant que le cerveau se tient sur la.touche,
                    <br>incapable d'autre chose que de siffler, taper du pied ou regarder le ciel.
                    <cite><br><br>Stephen King, Cellulaire</cite>
                        <?php
                    }
                    ?>
                    <?php
                    if($_SESSION['langue'] == 'english'){
                    ?>

                        Under extreme stress, the body takes control <br> and does what it needs to do while the brain is on the key,
                        <br> unable to do anything but whistle, stomp, or look at the sky.
                        <cite> <br> <br> Stephen King, Cellular </cite>

                        <?php
                    }

                    ?>

                </blockquote>
            </div>
        </div>
        <!--JS SLIDER-->
        <script type="text/javascript" src="../javascript/slider.js"></script>
        <!--Le stress-->
        <div id="part1">            
            <div class="mini-text">
                <?php
                if($_SESSION['langue'] == 'français'){
                ?>
                <h2>Le Stress</h2>
                    <?php
                }
                ?>
                <?php
                if($_SESSION['langue'] == 'english'){
                ?>
                <h2>Stress</h2>
                    <?php
                }
                ?>


                <div class="separator"></div>
                <?php
                if($_SESSION['langue'] == 'français'){
                ?>
                <h4>En quelques chiffres</h4>
                    <?php
                }
                ?>
                <?php
                if($_SESSION['langue'] == 'english'){
                    ?>
                    <h4>In a few figures</h4>
                    <?php
                }
                ?>
            </div>
            <!--Article-->
            <article>
                <?php
                if($_SESSION['langue'] == 'français'){
                ?>
                <h4 class="articleTitle">Stress : les conséquences sur la santé et sur la performance</h4>
                <p>Dans un cadre professionnel ou dans une situation tout à fait inattendue, le stress peut impacter notre capacité à agir. 
                    Cela induit un déséquilibre entre ce qui est demandé de réaliser et notre capacité à y répondre. 
                    </p>
                    <?php
                }
                ?>
                <?php
                if($_SESSION['langue'] == 'english'){
                ?>
                    <h4 class = "articleTitle"> Stress: consequences on health and performance </h4>
                    <p> In a professional setting or in a completely unexpected situation, stress can impact our ability to act.
                        This induces an imbalance between what is asked to achieve and our capacity to respond to it.
                    </p>
                <?php
                }
                ?>
            </article>            
            <!--number-->
            <div class="bubble-number">
                <div class="sub-bubble">
                    <?php
                    if($_SESSION['langue'] == 'français'){
                    ?>
                    <span>56% des salariés</span> <br>
                    <span>68% des managers</span>
                    <div class="separator"></div>
                    <p>affirment que le stress a un impact négatif sur leur état de santé.</p>

                        <?php
                    }
                    ?>
                    <?php
                    if($_SESSION['langue'] == 'english'){
                    ?>
                        <span> 56% of employees </span> <br>
                        <span> 68% of managers </span>
                        <div class = "separator"> </div>
                        <p> claim that stress has a negative impact on their health. </p>

                        <?php
                    }
                    ?>

                </div>
                <div class="sub-bubble">
                    <?php
                    if($_SESSION['langue'] == 'français'){
                    ?>

                    <span>24% des salariés</span> 
                    <span><br>79% des étudiants</span> 
                    <div class="separator"></div>
                    <p>se déclarent stressés.</p>

                    <?php
                    }
                    if($_SESSION['langue'] == 'english'){
                    ?>
                        <span> 24% of employees </span>
                        <span> <br> 79% of students </span>
                        <div class = "separator"> </div>
                        <p> declare themselves stressed. </p>
                        <?php
                    }
                    ?>
                </div>
                <div class="sub-bubble">
                    <?php
                    if($_SESSION['langue'] == 'français'){
                    ?>

                    <span>En moyenne,<br> les +40 ans<br></span> 
                    <div class="separator"></div>
                    <p>sont ceux qui sont le plus concerné par ce risque psychosocial.</p>

                        <?php
                    }
                    if($_SESSION['langue'] == 'english'){
                    ?>
                        <span> On average, <br> over 40s <br> </span>
                        <div class = "separator"> </div>
                        <p>are those who are most affected by this psychosocial risk.</p>
                        <?php
                    }
                    ?>
                </div>             
            <div>   
        </div>
        </div>
        <!--Performance et stress-->
        <div id="part2">
            <div id="performance">
                <article>
                    <?php
                    if($_SESSION['langue'] == 'français'){
                    ?>

                    <h4 class="articleTitle">Les avantages du stress</h4>
                    <p>Peut permettre d'effectuer un meilleur rendement, et même parfois de dépasser les objectifs attendus.</p>
                </article>
                <article>
                    <h4 class="articleTitle">Les causes du stress</h4>
                    <p>Peut être causé par une charge importante de travail, le manque de soutien ressenti parfois par les salariés, la pression ressentie dans leur environnement de travail.
                    </p>

                    <?php
                    }
                    if($_SESSION['langue'] == 'english'){
                    ?>
                    <h4 class = "articleTitle"> The Benefits of Stress </h4>
                    <p> Can lead to better performance, and sometimes even exceed expected goals. </p>
                </article>
                <article>
                    <h4 class = "articleTitle"> Causes of stress </h4>
                    <p> Can be caused by a heavy workload, the lack of support sometimes felt by employees, the pressure felt in their work environment.
                    </p>

                    <?php
                    }
                    ?>

                </article>
            </div>
            
        </div>
        <!--QUESTIONS RHETORIQUES-->
        <div id="bait">
            <?php
            if($_SESSION['langue'] == 'français'){
            ?>
            <blockquote class="citation">

                Vous voulez …
                Mesurer votre état de stress ?
            </blockquote>
            <blockquote class="citation">
                Améliorer votre temps de réaction ?
            </blockquote>
            <blockquote class="citation">
                Ne plus stresser avant ni pendant un évènement important ?
            </blockquote>
                <?php
            }
            if($_SESSION['langue'] == 'english'){
            ?>
            <blockquote class = "quote">

                You want …
                Measure your state of stress ?
            </blockquote>
            <blockquote class = "quote">
                Improve your reaction time ?
            </blockquote>
            <blockquote class = "quote">
                No longer stress before or during an important event ?
            </blockquote>
                <?php
            }
            ?>

            <br>
            <br>
        </div>
        <!--NOTRE PRODUIT-->
        <div id="product">
            <?php
            if($_SESSION['langue'] == 'français'){
                ?>
            <div class="mini-text">

                <h2>NOTRE PRODUIT</h2>
                <div class="separator"></div>
            </div>
            <div class="info-container">
                <div class="info-box">
                    <h3>Un boitier</h3>
                    <h4>Innovant</h4>
                </div>
                <div class="info-box">
                    <h3>Une plateforme</h3>
                    <h4>Intuitive et ergonomique</h4>
                </div>
                <div class="info-box">
                    <h3>Des tests</h3>
                    <h4>de haute précision</h4>
                </div>
            </div>

            <?php
            }
            if($_SESSION['langue'] == 'english'){
            ?>
            <div class = "mini-text">

                <h2> OUR PRODUCT </h2>
                <div class = "separator"> </div>
            </div>
            <div class = "info-container">
                <div class = "info-box">
                    <h3> A box </h3>
                    <h4> Innovative </h4>
                </div>
                <div class = "info-box">
                    <h3> Our platform </h3>
                    <h4> Intuitive and ergonomic </h4>
                </div>
                <div class = "info-box">
                    <h3> Tests </h3>
                    <h4> with high precision </h4>
                </div>
            </div>
                <?php
            }
            ?>

        </div>

        <div id="bandeau1">
        </div>

        <!--NOS TESTS-->
            <?php
            if($_SESSION['langue'] == 'français'){
            ?>
        <div id="test">
            <div class="mini-text">

                <h2>NOS TESTS</h2>
                <div class="separator"></div>
            </div>
            <div class="info-container png-container">
                <div class="info-box">
                    <h3>Cardiaque</h3>
                    <img class="png" src="../images/test/cardio.png">
                </div>
                <div class="info-box">
                    <h3>Auditif</h3>
                    <img class="png" src="../images/test/auditif.png">
                </div>
                <div class="info-box">
                    <h3>Réflexe</h3>
                    <img class="png" src="../images/test/reflex.png">
                </div>
            </div>

        </div>
                <?php
            }
            if($_SESSION['langue'] == 'english'){
            ?>
            <div id = "test">
                <div class = "mini-text">

                    <h2> OUR TESTS </h2>
                    <div class = "separator"> </div>
                </div>
                <div class = "info-container png-container">
                    <div class = "info-box">
                        <h3> Heart </h3>
                        <img class = "png" src = "../images/test/cardio.png">
                    </div>
                    <div class = "info-box">
                        <h3> Hearing </h3>
                        <img class = "png" src = "../images/test/auditif.png">
                    </div>
                    <div class = "info-box">
                        <h3> Reflex </h3>
                        <img class = "png" src = "../images/test/reflex.png">
                    </div>
                </div>
            </div>
                <?php
            }
            ?>

        <!--NOS PARTENAIRES-->
        <div id="partner">
            <div class="mini-text">
                <?php
                if($_SESSION['langue'] == 'français'){
                ?>
                <h2>Nos partenaires</h2>
                    <?php
                }
                if($_SESSION['langue'] == 'english'){
                ?>
                    <h2>Our partners</h2>
                    <?php
                }
                ?>

                <div class="separator"></div>
            </div>
            <div class="alterimage">
                <div class="elementAlternate">
                    <img id="image_partenaire" src="../images/Infinite_measures.gif">
                </div>                
            </div>

        </div>
        <div id="bandeau2">
        </div>
        <!--GALERY-->
        <div id="gallery">
            <?php
            if($_SESSION['langue'] == 'français'){
            ?>
            <div class="mini-text">
                <h2>Notre équipe</h2>
                <div class="separator"></div>
                <h4>Les membres et leur rôle</h4>
            </div>
                <?php
            }
            if($_SESSION['langue'] == 'english'){
            ?>
            <div class = "mini-text">
                <h2> Our team </h2>
                <div class = "separator"> </div>
                <h4> Our Members and their role </h4>
            </div>
                <?php
            }
            ?>

            <div class="gallery-container">
                <div class="boximg">
                    <img src="../images/profil/sophie.jpg">
                    <span>Sophie ZHANG<br>Responsable des finances</span>
                </div>
                <div class="boximg">
                    <img src="../images/profil/Photo Léna.jpg">
                    <span>Léna CHEAM<br>CEO and Project manager</span>
                </div>
                <div class="boximg">
                    <img src="../images/profil/rodolphe.jpg">
                    <span>Rodolphe BERNARD<br>Responsable technique</span>
                </div>
                <div class="boximg">
                    <img src="../images/profil/salem.jpg">
                    <span>Salem KHALIL<br>Responsable marketing</span>
                </div>
                <div class="boximg">
                    <img src="../images/profil/eddy.jpg">
                    <span>Eddy NGO<br>Directeur adjoint</span>
                </div>
                <div class="boximg">
                    <img src="../images/profil/gauthier.jpg">
                    <span>Gauthier SIMON<br>Responsable relations extérieures</span>
                </div>            
            </div>
        </div>
            <?php
            $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
            include($IPATH . "footer.php"); ?>
    </main>
</html>


