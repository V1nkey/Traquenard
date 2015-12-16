<html>
	<head>
		<meta charset = "UTF-8"/>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="design.css" type="text/css"/>
		<link rel="stylesheet" href="designBootstrap.css" type="text/css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class='container'>
<!--------------------------------------------------------------------BARRE DE NAVIGATION----------------------------------------------------------------------------->		
		<?php	include 'menuHorsCo.php'; ?>
<!------------------------------------------------------------FIN DE BARRE DE NAVIGATION------------------------------------------------------------------------------------->
			<br/>
			<br/>
			<div class='ancre' id="statistique"></div>
			<div id="mainDiv" class="col-lg-10 col-lg-offset-1 col-xs-12">
				<div  class='titreaccueil'>
					<h1  border='1'>Statistique </h1>
							<div  class='para'>
							quelques stats. Si la personne n'est pas connecté, aller sur espace membre ou n'importe laquelle de ses ancres l'enverra sur la page de connexion
							</div>
				</div>
				<div class='ancre'  id="soiree" ></div>
				<div class='titreaccueil'>
						<h1  border='1'>Signer pour une soirée : </h1>
						<div  class='para'>
							ici les membres pourront s'inscrire pour une soirée
							</div>
				</div>
				
			</div>
		</div>
		
		<footer>Copyright Kiwi & Time 2015</footer>
		<script src="scriptNavbar.js" type="text/javascript"></script>
	</body>
</html>