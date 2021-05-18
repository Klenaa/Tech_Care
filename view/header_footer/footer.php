<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <style>
        footer {
            width: 100%;
            background: #1e4d6e;
            height : 150px;
            display: flex;
            align-items: center;

        }

        #scroll, #scroll ul {
            padding: 0;
            margin: 0;
            list-style: none;

        }

        #scroll{
            width: 100%;
            display: flex;
            text-align: center;
            justify-content: space-evenly;
            align-items: center;

        }



        #scroll a {
            text-decoration: none;
            display: block;
            color:white;
            text-align: center;
            align-items: center;

        }


        #scroll ul {
            position: absolute;
            /* on cache les sous menus complètement sur la gauche */
            left: -999em;
            z-index: 2000;

        }

        #scroll li:hover ul {
            /* Au survol des li du menu on replace les sous menus */
            left: auto;
        }

        #scroll a:hover{
            text-decoration: underline;
        }





    </style>
</head>

<body>
    <footer>
        <ul id="scroll">
            <li><a href="<?php echo "http://localhost/Tech_Care/view/html/FAQ.php"?>">FAQ</a></li>
            <li><a href="http://localhost/Tech_Care/view/html/forum.php">Forum</a></li>
            <li><a href="http://localhost/Tech_Care/view/html/cgu.php">CGU</a></li>
            <li><a href="http://localhost/Tech_Care/view/html/contact.php">Contact</a></li>
            <li><a href="#">Langues</a>
                <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="#">Français</a></li>
                </ul>
            <li><a href="http://localhost/Tech_Care/view/html/legal_mentions.php">Mentions légales</a></li>
            <li><a href="http://localhost/Tech_Care//test_register_connexion/registerManager.php">Nous rejoindre</a></li>
            <li><a href="http://localhost/Tech_Care/test_register_connexion/deconnexion.php">Se déconnecter</a></li>


        </ul>
    </footer>
</body>
</html>