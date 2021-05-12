<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <style>
        footer {
            width: 100%;
            background: #1e4d6e;
            height : 150px;
        }

        #scroll, #scroll ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        #scroll {
            text-align: center;
            padding : 65px;
        }

        #scroll li {
            /* on place les liens du menu horizontalement */
            display: inline-block;
            width: 100px;
        }

        #scroll ul li {
            /* on enlève ce comportement pour les liens du sous menu */
            display: inherit;
        }

        #scroll a {
            text-decoration: none;
            display: block;
            color:white;
            text-align: center;
            white-space:nowrap;
        }

        #scroll ul {
            position: absolute;
            /* on cache les sous menus complètement sur la gauche */
            left: -999em;
            z-index: 1000;
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
            <li><a href="../html/FAQ.php">FAQ</a></li>
            <li><a href="../html/Forum.php">Forum</a></li>
            <li><a href="../html/cgu.php">CGU</a></li>
            <li><a href="../html/contact.php">Contact</a></li>
            <li><a href="#">Langues</a>
                <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="#">Français</a></li>
                </ul>
            <li><a href="../html/legal_mentions.php">Mentions légales</a></li>
            <li><a href="../../test_register_connexion/registerManager.php">Nous rejoindre</a></li>
            <li><a href="../../test_register_connexion/deconnexion.php">se Déconnecter</a></li>


        </ul>
    </footer>
</body>
</html>