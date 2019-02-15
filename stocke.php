<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>page de stocke </title>
</head>
<body>
	<?php 
	//on teste la declaration de nos variable
	if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['fonction']))
		{
	// on affiche nos résultats
	echo 'Votre nom est '.$_POST['nom'];
	echo ' votre prenom est '.$_POST['prenom'].'</b>';
	echo ' et votre fonction est </b>'.$_POST['fonction'];
}
	 ?>

</body>
</html>