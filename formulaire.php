<?php
	$displayform = false;
	$testError = false;
	$message = '';
	//var_dump($_POST);
	
	//CONDITIONS PAR RAPPORT A LA BDD A REVOIR
	if (isset($_POST) && !empty($_POST))
	{
		if (empty($_POST['nom']))
		{
			$message .= "Le nom est obligatoire<br>";
			$displayform = true;
			$testError = true;
		}
		elseif (!(preg_match("#^[a-zA-Z]+\-?[a-zA-Z]+$#", $_POST["nom"])))
		{
			$message .= "Le nom ne doit contenir que des lettres <br>";
			$displayform = true;
			$testError = true;
		}
		if (empty($_POST['prenom']))
		{
			$message = $message."Le prénom est obligatoire<br>";
			$displayform = true;
			$testError = true;			
		}
		elseif (!(preg_match("#^[a-zA-Z]+\-?[a-zA-Z]+$#", $_POST["prenom"])))
		{
			$message .= "Le prénom ne doit contenir que des lettres <br>";
			$displayform = true;
			$testError = true;
		}	
		
		if (empty($_POST['pseudo']))
		{
			$message .= "Le pseudo est obligatoire<br>";
			$displayform = true;
			$testError = true;
		}
		elseif (!(preg_match("#^[a-zA-Z0-9\_-]{4,15}$#", $_POST["pseudo"])))
		{
			$message .= "Le pseudo ne peut contenir que des lettres, des chiffres ou les caractères suivants : _ - <br>Le pseudo doit faire entre 4 et 15 caractères";
			$displayform = true;
			$testError = true;
		}
		
		if (empty($_POST['mail']))
		{
			$message .= "L'adresse mail est obligatoire<br>";
			$displayform = true;
			$testError = true;
		}
		elseif (!(preg_match("#^[a-zA-Z]+\-?[a-zA-Z]+\.?@[a-zA-Z]+\.[a-zA-Z]+$#", $_POST["mail"])))
		{
			$message .= "L'adresse mail ne doit contenir que des lettres, des chiffres ou les caractères suivants : _ -  <br>L'adresse mail doit être du type xyz@exemple.com <br>";
			$displayform = true;
			$testError = true;
		}
		
		if (empty($_POST['mdp']) || empty($_POST['confmdp']))
		{	
			$message .= "Le mot de passe est obligatoire<br>";
			$displayform = true;
			$testError = true;
		}
		elseif (strcmp($_POST["mdp"], $_POST["confmdp"]) != 0)
		{
			$message .= "Les deux mots de passe sont différents <br>";
			$displayform = true;
			$testError = true;
		}
		
		if (empty($_POST['codeparrain']))
		{
			$message .= "Le code parrain est obligatoire<br>";
			$displayform = true;
			$testError = true;
		}
		elseif (!(preg_match("#^[0-9]{6}$#", $_POST["codeparrain"])))
		{
			$message .= "Le code parrain est un code de 6 chiffres qui vous a été donné par votre parrain<br>";
			$displayform = true;
			$testError = true;
		}
		
		if (!(checkdate($_POST["moisNaiss"], $_POST["jourNaiss"], $_POST["anneeNaiss"])))
		{
			$message .= "La date de naissance n'est pas valide<br>";
			$displayform = true;
			$testError = true;
		}
	}
	else
		$displayform = true;
	
	if ($displayform == false)
		$message = "Inscription réussie";
?>


<html>
	<head>
		<meta charset = "UTF-8"/>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="design.css" type="text/css"/>
		<link rel="stylesheet" href="designBootstrap.css" type="text/css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="scriptForm.js" type="text/javascript"></script>
	</head>

	<body>
		<div class='container'>
<!--------------------------------------------------------------------BARRE DE NAVIGATION----------------------------------------------------------------------------->		
		<?php	include 'menuHorsCo.php'; ?>
<!------------------------------------------------------------FIN DE BARRE DE NAVIGATION------------------------------------------------------------------------------------->	

<!---------------------------------------------------------------------FORMULAIRE--------------------------------------------------------------------------------------------->		
			<div id='mainDiv' class="col-lg-10 col-lg-offset-1 col-xs-12">
			<br/>
			<br/>
				<div class="col-lg-8 col-lg-offset-2 col-xs-12">
		<?php		if ($displayform): ?>
		<?php			if($testError): ?>	
							<div class="row">
									<div class="alert alert-danger" role="alert">
		<?php							echo $message; ?>
									</div>
							</div>
		<?php			endif; ?>
			<br>
					<div class='row'>
						<FORM id='form' action ="formulaire.php" method ="POST" onsubmit="verifForm(this);">
						<!-- dans class : taille du bloc : 8 col de large pour un grand ecran
							2 colonnes de sautées avant le bloc
							le bloc prend tout l'ecran pour un petit ecran
						-->
							<div class='form-group'>
								<label for='nom'>Nom : </label> 
									<input type="text" id='nom' name='nom' placeholder="Nom" class='form-control' value='<?php echo (isset($_POST['nom']) ? $_POST['nom'] : "") ?>' onblur="verifNomPrenom(this);"/> 
							</div>
							<div class='form-group'>
								<label for='prenom'>Prénom : </label>
									<input type="text" id='prenom' name='prenom' placeholder="Prénom" class = 'form-control' value='<?php echo (isset($_POST['prenom']) ? $_POST['prenom'] : "") ?>' onblur="verifNomPrenom(this);"/>
							</div>
							<div class='form-group'>
								<label for='login'>Pseudo : </label>
									<input type="text" id='pseudo' name='pseudo' placeholder="Pseudo" class = 'form-control' value='<?php echo (isset($_POST['pseudo']) ? $_POST['pseudo'] : "") ?>' onblur="verifPseudo(this);"/> 
							</div>
							<div class='form-group'>
								<label for='ddn'>Date de naissance : </label>
									<div class='row'>
										<div class='col-lg-2 col-xs-3'>
											<select id='ddn' name="jourNaiss" size = '1'class='form-control'>
		<?php								for ($i=1; $i<=31; $i++) :?>
												<option><?php echo $i; ?></option>
		<?php								endfor; ?>
											</select>
										</div>
										<div class='col-lg-3 col-xs-5'>
											<select id='ddn' name="moisNaiss" size ='1'class='form-control'>
												<option value = "01">Janvier</option>
												<option value = "02">Février</option>
												<option value = "03">Mars</option>
												<option value = "04">Avril</option>
												<option value = "05">Mai</option>
												<option value = "06">Juin</option>
												<option value = "07">Juillet</option>
												<option value = "08">Août</option>
												<option value = "09">Septembre</option>
												<option value = "10">Octobre</option>
												<option value = "11">Novembre</option>
												<option value = "12">Décembre</option>
											</select>
										</div>
										<div class='col-lg-2 col-xs-4'>
											<select id='ddn' name="anneeNaiss" size ='1'class='form-control'>
		<?php								for ($i=1900; $i<=2000; $i++) : ?>
												<option><?php echo "$i"; ?></option>
		<?php								endfor; ?>
											</select>
										</div>
									</div>
							</div>
							<div class='form-group'>
								<label for='email'>Adresse mail : </label>
			<!--				<div class="input-group">
									<span class="input-group-addon">@</span> -->
									<input type="text" id='email' name='mail' placeholder="xyz@exemple.com" class = 'form-control' value='<?php echo (isset($_POST['mail']) ? $_POST['mail'] : "") ?>' onblur="verifMail(this);"/>   
			<!--				</div> -->
							</div>
							<div class='form-group'>
								<label for='passwd'>Mot de passe : </label>
									<input type="password" id='passwd' name='mdp' class = 'form-control'/> 
							</div>
							<div class='form-group'>
								<label for='confpasswd'>Confirmer mot de passe : </label>
									<input type="password" id='confpasswd' name='confmdp' class = 'form-control' onblur="verifMdp(this, document.getElementsByTagName('inscription').elements['confmdp']);" /> 
							</div>
							<div class='form-group'>
								<label for='code'>Code parrain : </label>
									<input type="text" id='code' name='codeparrain' class = 'form-control' value='<?php echo (isset($_POST['codeparrain']) ? $_POST['codeparrain'] : "") ?>' onblur="verifCode(this);"/> 
							</div>
							<div class='form-group'>
								Avez vous une voiture pour nous aider - pour les livraisons de bi&egrave;re - ?  
									<input type="radio" name='voiture' value='1' checked /> Oui
									<input type="radio" name='voiture' value='0' /> Non
							</div>
							<div class='form-group'>
								Sexe : 					 
									<input type="radio" name='sexe' value='homme' checked  />Homme
									<input type="radio" name='sexe' value='femme'  />Femme
									<input type="radio" name='sexe' value='info'  />GI haha.. :'(		<!-- C'est pas drole .. à supprimer pour la version finale ? -->
							</div>
							<div class='form-group'>
								Statut <!-- Nom à changer éventuellement-->:  
									<input type="radio" name='statut' value='chien' checked  />Célibataire en chien
									<input type="radio" name='statut' value='celib'  />Célibataire
									<input type="radio" name='statut' value='couple'  />En couple
									<input type="radio" name='statut' value='ouvert'  />En couple mais ouvert(e)
							</div>
							<div class='form-group'>
								<label for='studies'>Etude : </label>
									<select id='studies' name='etude' class = 'form-control'>
										<optgroup label="GI">
											<option value='GI1'>Info 1&egrave;re ann&eacute;e</option>
											<option value='GI2'>Info 2&egrave;re ann&eacute;e</option>
											<option value='GIAS'>AS Info</option>
										 </optgroup>
										 
										<optgroup label="GEA">	 
											<option value='GEA1'>GEA 1&egrave;re ann&eacute;e</option>
											<option value='GEA2'>GEA 2&egrave;re ann&eacute;e</option>
											<option value='GEAAS'>AS GEA</option>
										</optgroup>

										<optgroup label="TC">
											<option value='TC1'>TC 1&egrave;re ann&eacute;e</option>
											<option value='TC2'>TC 2&egrave;re ann&eacute;e</option>
											<option value='TCAS'>AS TC</option>
										</optgroup>
										
										<optgroup label="GC">
											<option value='GC1'>GC 1&egrave;re ann&eacute;e</option>
											<option value='GC2'>GC 2&egrave;re ann&eacute;e</option>
										</optgroup>
										
										<optgroup label="GMP">	
											<option value='GMP1'>GMP 1&egrave;re ann&eacute;e</option>
											<option value='GMP2'>GMP 2&egrave;re ann&eacute;e</option>
										</optgroup>
										
										<optgroup label="GB">	
											<option value='GB1'>GB 1&egrave;re ann&eacute;e</option>
											<option value='GB2'>GB 2&egrave;re ann&eacute;e</option>
										</optgroup>
										
											<option value='LP'>License Pro</option>
								
											<option value='autre'>Autre</option>
									</select>
								</div>
								<div class='form-group'>
									Dis nous ce que t'aimes din tin jatte min garchon (o ma chtiotte) : <br> 	 	
										<input type="checkbox" name='brune' value = "TRUE" />Brune <br>
										<input type="checkbox" name='blonde' value = "TRUE" />Blonde <br>
										<input type="checkbox" name='rouge' value = "TRUE" />Rouge <br>
										<input type="checkbox" name='ambree' value = "TRUE" />Ambr&eacute;e <br>
										<input type="checkbox" name='fruitee' value = "TRUE" />Fruit&eacute;e  <br>
										<input type="checkbox" name='triple' value = "TRUE" />Triple <br>
								</div>
					<!-- 	On évite le text area, source d'attaque par formulaire et autres choses pas sympas, mais si besoin, supprimer le commentaire et elle s'inserera -->
					<!--	Des choses &agrave nous dire en plus ? 	
							<textarea name='commentaire'> L&acirc;che toi ! </textarea>  
							
					<!-- 	le hidden sera peut etre utile plus tard, en attendant de savoir les fonctionnalités il sert à rien -->
								<input type="hidden" name='XXX' value='XXX' />

								<button type='submit' class="btn btn-primary"> Valider </button>			 
						</FORM>
		<?php		else : ?>
						<div class="row">
							<div class="alert alert-success" role="alert">
		<?php					echo $message; ?>
							</div>
						</div>
		<?php 		endif; ?>
				</div>
			</div>
			</div>
		</div>
<!---------------------------------------------------------------------FIN DU FORMULAIRE FORMULAIRE---------------------------------------------------------------------------->	
	</body>
</html>







<!--
GARDER LES INFO DE CONNEXION EN PHP : 
$_SERVER : données du server et du client !

$_SESSION : permet de maintenir la session sur toutes les pages
ex : $_SESSION['user_id'] = 42;
on peut récupérer 42 avec $_SESSION['user_id'] partout dans le site
1 règle : dire d'ouvrir une session : session_start();

index.php:
< ? php 
	session_start();
	$user['nom'] = 'Abitbol';
	$user['prenom'] = 'Georges';
	$user['email'] = 'gabitbol@texas.com';
	$_SESSION['user'] = $user;
? >
<html>
	<head>
	</head>
	<body>
		<a href='user.php'>ICI</a>
	</body>
</html>

autre page :
< ? php
	session_start();
	$user = $_SESSION;














