<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../css/Forum.css"/>
    <title>Forum</title>
</head>
<body>

<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "header.php"); ?>

<h1>Forum</h1>
<p>Sujet 1</p>
<p>Sujet 2</p>
<p>Sujet 3</p>
<p>Sujet 4</p>
<br>
<hr>

<h3>Posez vos questions</h3><br>

<div class="ask">
<label>
    <input type="text" name="" class="champ" placeholder="Ecrivez votre question" size="50">
</label><br>
<button type="button" class="signupbtn">Ajouter le sujet</button>
</div>
<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
include($IPATH . "footer.php"); ?>
</body>


</html>