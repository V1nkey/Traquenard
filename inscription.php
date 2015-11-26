<html>
	<head>
		<meta charset = "UTF-8"/>
	</head>
	
	<body>
		<?php
			/*connexion
			a la base
			de donnees*/
/*----------------------VERIFICATION DU REMPLISSAGE DES CHAMPS----------------------*/
/*----------------------------------------ET----------------------------------------*/
/*----------------------RECUPERATION DES DONNEES DU FORMULAIRE----------------------*/
/*Nom, Prénom = string
Pseudo = [A-Z a-z 0-9] 4 char minimum 4
mail= [A-Z a-z 0-9 _ - .]@[A-Z a-z 0-9 _ - .]
mdp = confmdp minimum 6 char
codeparrain = 6 chiffres
*/
			/*if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['pseudo']) || empty($_POST['mail']) || empty($_POST['mdp']) || empty($_POST['confmdp']) || 
				empty($_POST['codeparrain']) || empty($_POST['etude']))
			{
				echo '<body onLoad="alert(\'Merci de remplir les champs obligatoire.\')">';
				echo '<meta http-equiv="refresh" content="0; URL=formulaire.php">';
			}
			else
			{*/
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$pseudo = $_POST['pseudo'];
				$mail = $_POST['mail'];
				$mdp = $_POST['mdp'];
				$confmdp = $_POST['confmdp'];
				$codeparrain = $_POST['codeparrain'];
				$voiture = $_POST['voiture'];
				$sexe = $_POST['sexe'];
				$statut = $_POST['statut'];
				$etude = $_POST['etude'];
				
				//$com = $_POST['commentaire'];
			/*}*/

			
			
				$jourNaiss = $_POST['jourNaiss'];
				$moisNaiss = $_POST['moisNaiss'];
				$anneeNaiss = $_POST['anneeNaiss'];
			
/*----------------------DONNEES UTILES A LA GESTION DES ACHATS----------------------*/	
			if(isset($_POST['brune'])) 
				$brune = $_POST['brune'];
			if(isset($_POST['blonde']))
				$blonde = $_POST['blonde'];
			if(isset($_POST['rouge']))
				$rouge = $_POST['rouge'];
			if(isset($_POST['ambree']))
				$ambree = $_POST['ambree'];
			if(isset($_POST['fruitee']))
				$fruitee = $_POST['fruitee'];
			if(isset($_POST['triple']))
				$triple = $_POST['triple'];
				
/*----------------------VERIFICATION DES DONNEES----------------------*/
			if (checkdate($moisNaiss, $jourNaiss, $anneeNaiss))
				$dateNaiss = $anneeNaiss.'-'.$moisNaiss.'-'.$jourNaiss;
			else
			{
				echo '<body onLoad="alert(\'Date de naissance non valide.\')">';
				echo '<meta http-equiv="refresh" content="0; URL=formulaire.php">';
			}
*/

			
		?>
	</body>
</html>
			
			
			