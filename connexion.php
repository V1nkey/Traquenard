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
			<div id='test' class="col-lg-10 col-lg-offset-1 col-xs-12">
				<br/>
				<br/>
					<div class='row'>
						<FORM id='form' action ="connexion.php" method ="POST">
							<div class='form-group'>
								<input type="text" id='pseudo' name='pseudo' placeholder="Pseudo" class='form-control'/> 
							</div>
							<div class='form-group'>
								<input type="text" id='mdp' name='mdp' placeholder="Mot de passe" class = 'form-control'/>
							</div>
							<button type='submit' class="btn btn-primary"> Connexion </button>