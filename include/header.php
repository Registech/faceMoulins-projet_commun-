<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
		<link rel="icon" href="img/ico.png" type="image/x-icon">
		<link rel="shortcut icon" href="img/ico.png" type="image/x-icon"> 

		<title>Face-Moulins.fr</title>
	</head>
	<body>
							

		<div class="container-fluid" style="padding: 0">
<!-- Header -->
<header class="navbar navbar-fixed-top">

	<!-- Logo & recherche -->
	<div id="top">
		<img src="img/faceimg.png" alt="logo_face" />
		<div class="search hidden-xs hidden-sm">
			<input type="text" name="search" placeholder="Recherche..." id="search" maxlength="100">
			<span><i class="fa fa-search"></i></span>
			<p id="error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Limite de caractère atteint.</p>
		</div>
	</div>

	<!-- Menu / Navigation -->
	<div id="bottom" class="row">
		<div class="container">
			<nav class="navbar-header">
				<span class="text navbar-toggle">Navigation</span>
				<span class="bars navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<i class="fa fa-bars"></i>
				</span>
			</nav>

			<nav id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="index.php" title="Accueil" class="active">Accueil</a>
						<ul class="dropdown-menu">
							<li><a href="#">Presse</a></li>
							<li><a href="#">Agenda</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="presentation.php" title="Présentation" class="active">Présentation</a>
						<ul class="dropdown-menu">
							<li><a href="presentation.php#histoire">Histoire</a></li>
							<li><a href="presentation.php#actions">Actions</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="galerie.php" title="Galerie" class="active">Galerie</a>
						<ul class="dropdown-menu">
							<li><a href="galerie.php">Photos</a></li>
							<li><a href="galerieVideo.php">Médias</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="partenariat.php" title="Partenariat" class="active">Partenariat</a>
						<ul class="dropdown-menu">
							<li><a href="#">Entreprises</a></li>
							<li><a href="#">Associations</a></li>
							<li><a href="#">Particuliers</a></li>
							<li><a href="#">Institutions</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="laFabrik.php" title="Fabrik" class="active">La Fabrik</a>
						<ul class="dropdown-menu">
							<li><a href="laFabrik_galery.php">Photos</a></li>
							<li><a href="#">Projets</a></li>
							<li><a href="#">Actualités</a></li>
							<li><a href="#">Présentation</a></li>
						</ul>
					</li>
					<li><a href="contact.php" title="Contact" class="active">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>