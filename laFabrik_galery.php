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
		<link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
		<title>Face-Moulins.fr</title>
	</head>
	<body style="background-color: #E0E0E0">
		<div class="container-fluid" style="padding: 0">
			<?php include("include/header.php"); ?>
			<div class="container">
				<div class="row top">
				<h1 class="col-md-12 boxtitle"><i class="fa fa-code" aria-hidden="true"></i>PHOTOS</h1>
				</div>
				<div class="row">
					<div class="col-md-12 box" id="back_gal">
						<?php include("demo.php"); ?>
					</div>
				</div>
			</div>
			<?php include("include/footer.php"); ?>
			<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Cliquer pour revenir en haut" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-up"></i></a>
		</div>			
		
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>

