<?php
	session_start();
	$captcha="";
	$captchaString ="abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$captchaString = str_split($captchaString);
	shuffle($captchaString);
	for($i=0; $i<5; $i++){
		$captcha .= $captchaString[$i];
	}
	if(!isset($_POST["code"])){
		$_SESSION["code"] = $captcha;
	}
	else if($_POST["code"] != $_SESSION["code"] OR $_POST["code"] == ""){
			$_SESSION["code"] = $captcha;
		}
	if(isset($_POST["code"])){
		if(htmlspecialchars($_POST["code"]) == $_SESSION["code"]){
			include('include/formulaire.php');
			session_destroy();
			$_POST["code"] = "";
			header("location:mailgo.php");			
		}else if (htmlspecialchars($_POST["code"]) != "" AND htmlspecialchars($_POST["code"]) != $_SESSION["code"]){
			$connec = "Erreur";
		}
	}	
?>	
			<?php include("include/header.php"); ?>
			<div class="container" style="margin-top: 220px;">
				<div class="row">
				<h1 id="planacces"><i id="marker" class="fa fa-map-marker" aria-hidden="true"></i> Plan d'accés</h1>
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
     	 							<span class="prenom fa fa-user"></span><input class="prenom1" type="prenom" name="prenom" placeholder="Prénom" required/>
     	 							</div>
    							</div>
    							<div class="form-group">
     	 							<label for="nom">Nom *</label>
     	 							<div class="onglet">
     	 							<span class="prenom fa fa-user"></span><input class="prenom1" type="nom" name="nom" placeholder="Nom" required/>
     	 							</div>
    							</div>
    							<div class="form-group">
     	 							<label for="email">E-mail *</label>
     	 							<div class="onglet">
     	 							<span class="prenom fa fa-envelope"></span><input class="prenom1" type="email" name="mail" placeholder="Adresse e-mail" required/>
     	 							</div>
    							</div>
    							<div class="form-group">
     	 							<label for="telephone">Téléphone *</label>
     	 							<div class="onglet">
     	 							<span class="prenom fa fa-phone"></span><input class="prenom1" type="telephone" name="telephone" placeholder="Téléphone"/>
     	 							</div>
    							</div>
    							<div class="form-group">
     	 							<label for="sujet">Sujet *</label>
     	 							<div class="onglet">
     	 							<span class="prenom fa fa-info-circle"></span><input class="prenom1" type="sujet" name="sujet" placeholder="Sujet" required/>
     	 							</div>
    							</div>
    							<div class="form-group">
     	 							<label for="message">Message *</label>
     	 							<div id="onglet1">
     	 							<span id="message" class="fa fa-envelope"></span><textarea id="message1" type="message" name="message" placeholder="Message" style="width:70%" required></textarea>
     	 							</div>
    							</div>
    								<div class="form-group">
     	 							<?php 
     	 								if(!isset($_POST["code"]) OR $_POST["code"] != $_SESSION["code"]){?>
     	 									<label for="code">Code de sécurité *</label>
     	 									<div class="onglet"><span class="prenom fa fa-key"></span><input class="prenom1"  type="code" name="code" placeholder="Recopiez le code ci-dessous" required/>
     	 									</div>
     	 									<p id="code"><img src="include/captcha.php" alt="captcha"/></p>
     	 									<p id="champ">*Champs obligatoire</p>
     	 									<?php }
     	     	 						if(isset($connec))
     	 									echo $connec;
     	 							?>
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
							<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:contact.territoirebourbonnais@fondation.org" id="mailContact"> contact.territoirebourbonnais@fondation.org</a></p>
							<p><i class="fa fa-home" aria-hidden="true"></i> 1-3 rue Bethelot</br>03000 MOULINS CEDEX</p>
							<p><i class="fa fa-calendar" aria-hidden="true"></i> Ouvert tout les jours</br>Du lundi au vendredi</br>De 9h à 19h</p>
							<p><i class="fa fa-facebook-official" aria-hidden="true"></i> Vous pouvez nous contacter également sur Facebook</p>
						</div>
					</div>	
				</div>

			</div>
			<?php include("include/footer.php"); ?>
