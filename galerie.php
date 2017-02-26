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
			</div>	
			<?php include("include/footer.php"); ?>
		</div>			
		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>
	




	
