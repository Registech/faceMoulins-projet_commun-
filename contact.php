<?php
	session_start();
	$captcha="";
	$captchaString ="abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$captchaString = str_split($captchaString);
	shuffle($captchaString);
	for($i=0; $i<5; $i++){
		$captcha .= $captchaString[$i];
	}
	if(!isset($_POST["code"]) OR $_POST["code"] != $_SESSION["code"] OR $_POST["code"] == ""){
		$variable ='<div class="onglet"><span class="prenom glyphicon glyphicon-ok"></span><input class="prenom1"  type="code" name="code" placeholder="Recopiez le code ci-dessous"/>
     	 							</div>
     	 							<p id="code"><img src="include/captcha.php" alt="captcha"/></p>
     	 							<p id="champ">*Champs obligatoire</p>';
		$_SESSION["code"] = $captcha;
	}

	if($_POST["code"] == $_SESSION["code"]){
		session_destroy();
		$_POST["code"] = "";
		$connec = "Message Envoyé";
	}
?>	
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
			<?php include("include/header.php"); ?>
			<div class="container" style="margin-top: 220px;">
				<div class="row">
				<h1 id="planaccés"><i id="marker" class="fa fa-map-marker" aria-hidden="true"></i> Plan d'accés</h1>
					<div id="map" classmd-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2743.1510913090165!2d3.333080415594653!3d46.564477379129414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f11c40ac979d1d%3A0xc6aed001b1b2a5e5!2s3+Rue+Berthelot%2C+03000+Moulins!5e0!3m2!1sfr!2sfr!4v1486916970162" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<h1 class="col-md-12"><i id="contactez" class="fa fa-address-book-o" aria-hidden="true"></i> Contactez-nous</h1>
						<div id="cadregauche" class=" col-xs-12 col-sm-12 col-md-12">
							<p>Pour nous écrire, merci de remplir ce formulaire.</p>
							 <form method="post" target="contact.php">
    							<div class="form-group">
     	 							<label for="prenom">Prénom *</label>
     	 							<div class="onglet">
     	 							<span class="prenom glyphicon glyphicon-user"></span><input class="prenom1" type="prenom" name="prenom" placeholder="Prénom"/>
     	 							</div>
    							</div>
    							<div class="form-group">
     	 							<label for="nom">Nom *</label>
     	 							<div class="onglet">
     	 							<span class="prenom glyphicon glyphicon-user"></span><input class="prenom1" type="nom" name="nom" placeholder="Nom"/>
     	 							</div>
    							</div>
    							<div class="form-group">
     	 							<label for="email">E-mail *</label>
     	 							<div class="onglet">
     	 							<span class="prenom glyphicon glyphicon-envelope"></span><input class="prenom1" type="email" name="recherche" placeholder="Adresse e-mail"/>
     	 							</div>
    							</div>
    							<div class="form-group">
     	 							<label for="telephone">Téléphone *</label>
     	 							<div class="onglet">
     	 							<span class="prenom glyphicon glyphicon-earphone"></span><input class="prenom1" type="telephone" name="telephone" placeholder="Téléphone"/>
     	 							</div>
    							</div>
    							<div class="form-group">
     	 							<label for="sujet">Sujet *</label>
     	 							<div class="onglet">
     	 							<span class="prenom glyphicon glyphicon-info-sign"></span><input class="prenom1" type="sujet" name="sujet" placeholder="Sujet"/>
     	 							</div>
    							</div>
    							<div class="form-group">
     	 							<label for="message">Message *</label>
     	 							<div id="onglet1">
     	 							<span id="message" class="glyphicon glyphicon-pencil"></span><textarea id="message1" type="message" name="message" placeholder="Message" style="width:70%"></textarea>
     	 							</div>
    							</div>
    								<div class="form-group">
     	 							<label for="code">Code de sécurité *</label>
     	 							<?php 
     	 								if(isset($variable)){
     	 									echo $variable; 
     	 									}
     	     	 						if(isset($connec))
     	 									echo $connec;
     	 								else 
     	 									echo "Erreur"; 
     	 							?>
    							</div>
    							<div class="checkbox">
      								<label><input type="checkbox"> Remember me</label>
    							</div>
    							<div class="row">
    								<button id="envoyer" type="submit" class="btn btn-default">Envoyer</button>
    								<button id="reinit" type="submit" class="btn btn-default">Reinitialiser</button>
    							</div>
  							</form>
						</div>
					</div>	
					<div class="col-md-4 col-md-offset-1">
						<h1 class="col-md-12"><i id="info" class="fa fa-info-circle" aria-hidden="true"></i> Information</h1>

						<div id="cadredroit" class="col-md-12">
							<p id="fondation">Fondation Agire contre l'Exclusion</br>Face Territoire Bourbonnais</p>
							<p><i class="fa fa-phone" aria-hidden="true"></i>  06 89 32 71 09</p>
							<p><i class="fa fa-envelope" aria-hidden="true"></i> contact.territoirebourbonnais@fondation.org</p>
							<p><i class="fa fa-home" aria-hidden="true"></i> 1-3 rue Bethelot</br>03000 MOULINS CEDEX</p>
							<p><i class="fa fa-calendar" aria-hidden="true"></i> Ouvert tout les jours</br>Du lundi au vendredi</br>De 9h à 19h</p>
							<p><i class="fa fa-facebook-official" aria-hidden="true"></i> Vous pouvez nous contacter également sur Facebook</p>
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
