<?php
	session_start();
	if(!empty($_SESSION["login"]))
		$_SESSION["connexion"] = "se déconnecter";
	else
		$_SESSION["connexion"] = 'se connecter';
	
	include("include/header.php"); ?>
	<div class="container">
		<section class="row" id="section1">
			<article class="col-md-7 text-center hidden-xs" id="sec" >
				<a id="lienArticle" href="http://www.fondationface.org/lancement-de-la-fondation-pour-linvestissement-social-et-le-developpement-humain/"><img class="img1" id="img1" src="http://www.fondationface.org/wp-content/uploads/hollande-675x385.jpg"></a>
				<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, </p>
			</article>	
			<article class="col-xs-12 col-md-4 text-left" id="articleIndex">	
				<h2 class="h1 text-center"><span id="Fil">FIL       </span> D'ACTUALITE</h2>
				<div class="article1">
					<a href="" class="col-xs-12 col-md-12 h4 " id="articleUn">LANCEMENT DE LA FONDATION POUR...</a>
					<p>  Lancement de la fondation pour l’investissement social et le développement humain (FISO), sous l’égide de...</p>
				</div>
				<div class="article1">
					<a href="" class="col-md-12 h4" class="article1"  id="articleDeux">LANCEMENT DU CONCOURS S’ENGAGER POUR...</a>
					<p>Associations, start-ups, entreprises, collectivités, votre projet crée de l’innovation sociale, des emplois et de...</p>
				</div>
				<div class="article1">
					<a href="" class="col-md-12 h4" class="article1"  id="articleTrois">CIVIGAZ, GRAND VAINQUEUR DU CHALLENGE...</a>
					<p>Découvrez le Programme de Service Civique de la Transition énergétique soutenu et récompensé par...</p>
				<div id="article3">
			</article>
			<?php 
				if(!empty($_SESSION["login"]))
					echo '<button class="btn btn-primary" onclick="admin(\'ajoutArt\');">Ajouter un article</button>';
					?>	
		</section>
		<section id="section2" class="row container text-center">
			<div id="divFacebook" class="col-xs-offset-1 col-xs-11 col-md-offset-0 col-md-4">
				<div class=row>
					<p id="pFacebook" class="col-md-1"><i class="fa fa-facebook" id="logoFacebook"></i></p>
					<h2 class="h2 col-md-1">FACEBOOK</h2>
					<div class="fb-page" data-href="https://www.facebook.com/faceterritoirebourbonnais/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-height="300"><blockquote cite="https://www.facebook.com/faceterritoirebourbonnais/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/faceterritoirebourbonnais/">FACE Territoire Bourbonnais</a></blockquote></div>
				</div>
			</div>	
			<div id="divPresse" class="col-xs-offset-1 col-xs-11 col-md-offset-1 col-md-7">
				<div class=row>
					<h2 class="h2 col-md-12">PRESSE</h2>
					<div id="contenuPresse" class="col-md-offset-1 col-md-10">
						</div>	
				</div>
			</div>	
		</section>
	</div>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>	
	<?php include("include/footer.php"); ?>
