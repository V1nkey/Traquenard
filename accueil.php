<html>
	<head>
		<meta charset = "UTF-8"/>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="designBootstrap.css" type="text/css"/>
		<link rel="stylesheet" href="design.css" type="text/css"/>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class='container'>
	<!-- BARRE DE NAVIGATION : MENU HORIZONTAL-->
	<!-- COULEUR EVENTUELLEMENT A CHANGER-->
			<nav class='navbar navbar-inverse navbar-fixed-top'>
				<div class='container-fluid'>
					<div class='navbar-header'>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!--<a class="navbar-brand" href="accueil.php">Accueil</a>-->
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">		
						<ul class='nav navbar-nav'>
							<li><a href="accueil.php">Accueil </a></li>
							<li><a href="#">ETC </a></li>
							<li><a href="#">ETC </a></li>
							<li class='dropdown'>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Sous Menu 1 </a></li>
									<li><a href="#">Sous Menu 2 </a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Sous Menu 3 </a></li>
								</ul>
							</li>
						</ul>
						<ul class='nav navbar-nav navbar-right'>
							<li><a href="#">Connexion </a></li>		<!--MENU HORIZONTAL-->
							<li><a href="formulaire.php">Inscription </a></li>	<!--MENU HORIZONTAL-->
						</ul>
					</div>
				</div>
			</nav>
	<!-- FIN DE BARRE DE NAVIGATION-->
		
		<br/>
		<br/>
		</div>
	</body>
</html>