<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="messagerie.css"/>
    <link rel="stylesheet" href="header.css"/>
    <title>Messagerie</title>

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
<body>
<div class="container">
    <div class="messaging">
        <div class="inbox_msg">
            <section class="inbox_people">
                <div class="headind_srch">
                    <div class="recent_heading">
                        <h4>Recent</h4>
                    </div>
                </div>
                <div class="inbox_chat">
                    <div class="chat_list active_chat">
                        <div class="chat_people">
                            <div class="chat_ib">
                                <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                <p>Test, which is a new approach to have all solutions
                                    astrology under one roof.</p>
                            </div>
                        </div>
                    </div>
                    <div class="chat_list">
                        <div class="chat_people">
                            <div class="chat_ib">
                                <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                <p>Test, which is a new approach to have all solutions
                                    astrology under one roof.</p>
                            </div>
                        </div>
                    </div>
                    <div class="chat_list">
                        <div class="chat_people">
                            <div class="chat_ib">
                                <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                <p>Test, which is a new approach to have all solutions
                                    astrology under one roof.</p>
                            </div>
                        </div>
                    </div>
                    <div class="chat_list">
                        <div class="chat_people">
                            <div class="chat_ib">
                                <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                <p>Test, which is a new approach to have all solutions
                                    astrology under one roof.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mesgs">
                <div class="msg_history">
                    <div class="incoming_msg">
                        <div class="received_msg">
                            <div class="received_withd_msg">
                                <p>Test which is a new approach to have all
                                    solutions</p>
                                <span class="time_date"> 11:01 AM    |    June 9</span></div>
                        </div>
                    </div>
                    <div class="outgoing_msg">
                        <div class="sent_msg">
                            <p>Test which is a new approach to have all
                                solutions</p>
                            <span class="time_date"> 11:01 AM    |    June 9</span> </div>
                    </div>
                    <div class="incoming_msg">
                        <div class="received_msg">
                            <div class="received_withd_msg">
                                <p>Test, which is a new approach to have</p>
                                <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
                        </div>
                    </div>
                    <div class="outgoing_msg">
                        <div class="sent_msg">
                            <p>Apollo University, Delhi, India Test</p>
                            <span class="time_date"> 11:01 AM    |    Today</span> </div>
                    </div>
                    <div class="incoming_msg">
                        <div class="received_msg">
                            <div class="received_withd_msg">
                                <p>We work directly with our designers and suppliers,
                                    and sell direct to you, which means quality, exclusive
                                    products, at a price anyone can afford.</p>
                                <span class="time_date"> 11:01 AM    |    Today</span></div>
                        </div>
                    </div>
                </div>
                <div class="type_msg">
                    <div class="input_msg_write">
                        <input type="text" class="write_msg" placeholder="Type a message" />
                        <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</body>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php"); ?>
</html>