<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/admin.css">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
		<link rel="icon" href="img/ico.png" type="image/x-icon">
		<link rel="shortcut icon" href="img/ico.png" type="image/x-icon"> 
		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<title>administration_Face-Moulins.fr</title>
	</head>
	<body class="container-fluid" style="margin-left:auto; margin-right: auto;">
		<?php
		if(isset($_POST["login"])){
				session_start();
				$_SESSION["login"] = htmlspecialchars($_POST["login"]);
				$_SESSION["password"] = htmlspecialchars($_POST["password"]);
				if($_SESSION["login"] == "admin" AND $_SESSION["password"] == "admin"){?>
					<div class="row">
						<nav id="navbar" class="col-md-3">
							<ul id="navAdmin" class="list-unstyled">
								<li><a href="#" id="newsLetter">Newsletter</a></li>
								<li><a href="#">Partenaire</a></li>
								<li><a href="#" id="changeImage">Articles</a></li>
								<li><a href="#" id="ajoutImage">Gallerie</a></li>
								<li><a href="#">Fabrik</a></li>
								<li><a href="#" id="changePassword">AdminPassword</a></li>
							</ul>
						</nav>		
						<section id="sectionAdmin" class="col-md-9 text-center" >
							<img src="" />
							<script>
								$("#changePassword").on("click", function(e){
									e.preventDefault();
									go("password");
								});
								$("#changeImage").on("click", function(e){
									e.preventDefault();
									go("imageArticle");
								});
								$("#ajoutImage").on("click", function(e){
									e.preventDefault();
									go("ajoutImage");
								});
								$("#validArticle").on("click", function(e){
									e.preventDefault();
									go("article");
								});
								$("#newsLetter").on("click", function(e){
									e.preventDefault();
									go("newsLetter");
								});
							</script>	
						</section>
					</div>	
			<?php }
		}
		else if(!isset($_POST["password"]) OR !isset($_POST["login"]) OR !isset($_SESSION["password"]) OR !isset($_SESSION["login"]) OR $_SESSION["password"] = "" OR $_SESSION["login"] == ""){?>
				<div class="connexion text-center">
					<h3>Veuillez vous connecter pour poursuivre</h3>
					<form method="POST" target="admin.php" >
						<input type="mail" name="login" class="login" placeholder="Login" required />
						<input type="password" name="password" class="password" placeholder="Mot de passe" required />
						<button type="submit">Se connecter</button>
					</form>		
				</div>
			<?php
				}
			else{?>
				<div class="connexion text-center">
					<h3>Veuillez vous connecter pour poursuivre</h3>
					<form method="POST" target="admin.php" >
						<input type="mail" name="login" class="login" placeholder="Login" required />
						<input type="password" name="password" class="password" placeholder="Mot de passe" required />
						<button type="submit">Se connecter</button>
					</form>		
				</div>
			<?php
				} 
			?>		

		<script type="text/javascript" src="js/admin.js"></script>
	</body>
</html>

