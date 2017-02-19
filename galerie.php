<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
		<title>Face-Moulins.fr</title>
	</head>
	<body>
		<div class="container-fluid" style="padding: 0">
			<?php include("include/header.php");?>
			<div class="container" id='container1'>
				<div id="carou">
					    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					      <!-- Indicators -->
					      <ol class="carousel-indicators">
					        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					      </ol>

					      <!-- Wrapper for slides -->
					      <div class="carousel-inner">
					        <div class="item active">
					          <img src="img/carou1.jpg" alt="#">
					          <div class="carousel-caption">
					            <h2>Pacman du pauvre</h2>
					          </div>
					        </div>
					        <div class="item">
					          <img src="img/carou2.jpg" alt="#">
					          <div class="carousel-caption">
					            <h2>Atelier décoration</h2>
					          </div>
					        </div>
					        <div class="item">
					          <img src="img/carou3.jpg" alt="#">
					          <div class="carousel-caption">
					            <h2>5 fruits et légumes par jour</h2>
					          </div>
					        </div>
					      </div>

					      <!-- Controls -->
					      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					        <span class="glyphicon glyphicon-chevron-left"></span>
					      </a>
					      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					        <span class="glyphicon glyphicon-chevron-right"></span>
					      </a>
					    </div>
				</div>

				<footer class="row container-fluid text-center">
					<p class="col-md-offset-1 col-md-10"></p>
				</footer>

			</div>	
			<div id="footer" class="row">
				<div class="col-md-offset-1 col-md-3">
					<h3>Retrouvez nous sur </h3>
					<img src="img/facebookwidget.png" alt="faux Facebook" />
				</div>
				<div class="col-md-4">
					<h3>Contactez nous</h3>
					<p class="titreContact">Par téléphone </p>
					<p class="contact">06 89 32 71 09</p>
					<p class="titreContact">Par mail</p>
					<p class="contact"><a href="mailto:contact.territoirebourbonnais@fondationface.org">contact.territoirebourbonnais@fondationface.org</a></p>
					<p>FACE Territoire Bourbonnais <br/>1-3, rue Berthelot 03000 MOULINS CEDEX</p>
					<p>Ouvert tous les jours <br/>Du Lundi au Vendredi de 9h à 17h</p>
				</div>
				<div class="col-md-4">
					<h3>NewsLetter</h3>
					<p>Inscrivez vous à notre newsletter pour recevoir mensuellement les dernières actualités de Face Territoire Bourbonnais</p>
					<div  id="mailDiv">
						<input type="mail" name="mail" id="mail" placeholder="Entrez votre mail"/><p id="boxEnveloppe"><i class="glyphicon glyphicon-envelope" id="enveloppe"></i></p>		
					</div>
					<p id="texteEtoile">
						* Les données personnelles que vous avez enregistrées seront utilisées afin de pouvoir vous envoyer cette newsletter. Ces données ne seront pas partagées avec des tiers.
					</p>
				</div>
			</div>
			<footer class="row" id="footerFooter">
				<p class="col-xs-offset-2 col-xs-8 col-md-offset-1 col-md-5 text-center" style="padding: 0">©2017-Face Territoire Bourbonnais-Tous droits réservés</p>
				<ul id="listFooter" class="list-unstyled list-inline col-xs-offset-2 xol-xs-8  col-md-offset-2 col-md-4">
					<li><a href="#">Accueil</a> |</li>
					<li><a href="#">Contact</a> |</li>
					<li><a href="#">Mentions Légales</a></li>
				</ul>	
			</footer>
		</div>			
		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>
	




	