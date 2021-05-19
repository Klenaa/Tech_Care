<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="../css/edit_profile.css"/>
		<title>Page éditer le profil</title>
	</head>

	<body>
    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
    include($IPATH . "header.php"); ?>

		<h1>Profil</h1>
		<form method="post" action=".php">
			<fieldset class="gauche">
				<div>Modifier son profil</div><br>
				<label>Nom</label>
			    <input name="nom" placeholder="Entrez votre nom" autofocus="" value="Nom" required=""><br>
			    <label>Prénom</label>
			    <input name="prénom" placeholder="Entrez votre prénom" autofocus="Prénom" value="" required=""><br>
			    <label>Email</label>		     		
			    <input name="email" value="nom.prénom@mail.com" readonly ><br>
				<label>Date de naissance</label>
				<input name="date de naissance" placeholder="Entrer votre date de naissance" maxlength="10" value="jj/mm/aaaa" required=""/> <br>
				<label>Adresse postale</label>
				<input name="adresse postale" placeholder="Entrer votre adresse postale" value=""/> <br/>
				<label>Code postale</label>
				<input name="code postale" placeholder="Entrer votre code postale" value=""/> <br/>
				<label>Niveau d'étude</label>
				<input name="niveau d'étude" placeholder="Entrer votre niveau d'étude" value=""/> <br/>
				<button class="button" name="annuler">Annuler</button>
				<button class="button" name="modification">Modifier</button>
			</fieldset>
		</form>

		<form method="post" action=".php">
			<fieldset class="droit">
				<div>Modifier le mot de passe</div><br>
				<label>Ancient mot de passe <em>*</em></label>
				<input type="password" name="mot de passe" required/>  <br/>
				<label>Nouveau mot de passe <em>*</em></label>
				<input type="password" name="mot de passe" minlength="8" required/>  <br/>
				<label>Confirmation du nouveau mot de passe <em>*</em></label>
				<input type="password" name="mot de passe" minlength="8" required/>  <br/>
				<button class="button" type="submit" name="modification">Modifier</button>
			</fieldset>
		</form>
        <?php
        $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/Tech_Care/view/header_footer/';
        include($IPATH . "footer.php"); ?>
	</body>
	
</html>