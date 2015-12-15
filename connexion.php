<?php
	$displayform = false;
	$testError = false;
	$message = '';
	
	if (isset($_POST) && !empty($_POST))
	{
		if(empty($_POST["pseudo"]))
		{
			$message .= "Merci d'entrer votre pseudo<br>";
			$message .= "Rappel : Le pseudo ne peut contenir que des lettres, des chiffres ou les caractères suivants : _ - <br>";
			$message .= "Le pseudo doit faire entre 4 et 15 caractères<br>";
			$displayform = true;
			$testError = true;
		}
		
		if(empty($_POST["mdp"]))
		{
			$message .= "Merci d'entrer votre mot de passe<br>";
			$displayform = true;
			$testError = true;
		}
	}
	else
		$displayform = true;
		
		//CONDITIONS PAR RAPPORT A LA BDD A REVOIR
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
		<?php	if ($displayform)
					include 'menuHorsCo.php';
				else 
					include 'menuCo.php';
		?>
<!------------------------------------------------------------FIN DE BARRE DE NAVIGATION------------------------------------------------------------------------------------->
			<div id='mainDiv' class="col-lg-10 col-lg-offset-1 col-xs-12">
			<br>
			<br>
				<div class="col-lg-8 col-lg-offset-2 col-xs-12">
		<?php			if ($displayform): ?>
		<?php				if($testError): ?>	
								<div class="row">
										<div class="alert alert-danger" role="alert">
		<?php								echo $message; ?>
										</div>
								</div>
		<?php				endif; ?>
			<br>
					<div class='row'>
						<FORM id='form' action ="connexion.php" method ="POST">
							<div class='form-group'>
								<label for='login'>Pseudo : </label>
								<input type="text" id='pseudo' name='pseudo' placeholder="Pseudo" class='form-control'/> 
							</div>
							<div class='form-group'>
								<label for='mdp'>Mot de passe : </label>
								<input type="text" id='mdp' name='mdp' placeholder="Mot de passe" class = 'form-control'/>
							</div>
							<div class='col-lg-4 col-lg-offset-4'>
								<button type='submit' class="btn btn-primary"> Connexion </button>
							</div>
							<br>
						</FORM>
		<?php			else : ?>
							<div class="row">
								<div class="alert alert-success" role="alert">
		<?php						echo $message; ?>
								</div>
							</div>
		<?php 			endif; ?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>