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
	<body>
		<div class="container-fluid" style="padding: 0">
			<?php include("include/header.php"); ?>
			<div class="container">
				<div class="row top">
				<h1 class="col-md-12 boxtitle"><i class="fa fa-code" aria-hidden="true"></i>PRÉSENTATION</h1>
					<div class="col-md-12 box">
					Nous sommes 23 élèves de l'école du numérique alias la Fabrik mis en place par Face Bourbonnais.
    Notre formation dure 8 mois dont 2 mois de stage durant lesquels nous allons apprendre 
    différents languages informatiques afin de réaliser des sites internets.
					</div>
				</div>
				<div class="row">
					<h1 class="col-md-12 boxtitle apprenants"><i class="fa fa-users" aria-hidden="true"></i>LES 23 APPRENANTS</h1>
					<div class="col-md-12 box">
						<div id="liste_padding">
						<table class="table table-striped">
							<tbody>
							<?php 
								$bdd = new PDO('mysql:host=localhost;dbname=faceMoulins;charset=utf8', 'faceMoulins', 'Mysteria666');
								$req = $bdd->prepare('SELECT * FROM EleveFabrik');
								$req->execute();
								while($data = $req->fetch()){
									echo '<tr>';
									echo '<th scope="row">'.$data["id"].'</th>';
									echo '<td>'.$data["nomPrenom"].'</td>' ;
									echo '<td><a href="'.$data["linkedIn"].'"> Linkedin <i class="fa fa-linkedin" aria-hidden="true"></i></a></td>';
									echo '<td><a href="'.$data["gitHub"].'"> Github <i class="fa fa-github" aria-hidden="true"></i></a></td>';
									echo '</tr>';
								}
								
								?>
    				</tbody>
    				</table>
    				</div>
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

