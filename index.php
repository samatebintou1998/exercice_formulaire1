<html>
<head>
<title>Ma page de test</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<img src="imge.jpg">
	</header>
	<p>
		<h3>bienvenue</h3>
		ATTENTION, LES PIRATES SONT COMPÉTENTS EN CRYPTOGRAPHIE…<br>
		<mark>Il faut remplirer ce formulaire pour se connecter</mark>
	</p>

	<form action = "stocke.php" method="post">
		<strong>Votre nom :</strong> 
		<input type = "text" name = "nom" value="Votre nom"><br />
		<strong>votre prenom</strong>
		<input type="text" name="prenom" value="votre prenom"><br>
		<strong>Votre fonction :</strong>
		<input type = "text" name = "fonction" value="etudiant"><br />
		<strong>votre date de naissance</strong>
		<input type="text" name="date_naissance"><br>
		<strong>votre identifiant_slack</strong>
		<input type="text" name="identifiant_slack">
		<input type = "submit" value = "connecter">
	</form>

	<footer>
		pour plus information contact nous<br>
		Egmail::bintoutapha2017@gmail.com ou bien // telephone ::785515990
	</footer>
</body>
</html>