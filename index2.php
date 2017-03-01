<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
		<link rel="icon" href="img/ico.png" type="image/x-icon">
		<link rel="shortcut icon" href="img/ico.png" type="image/x-icon"> 

		<title>Face-Moulins.fr</title>
	</head>
	<body>
							<div id="fb-root"></div>
								<script>(function(d, s, id) {
									  var js, fjs = d.getElementsByTagName(s)[0];
									  if (d.getElementById(id)) return;
									  js = d.createElement(s); js.id = id;
									  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
									  fjs.parentNode.insertBefore(js, fjs);
									}(document, 'script', 'facebook-jssdk'));
								</script>

		<div class="container-fluid" style="padding: 0">
			<?php include("include/header.php"); ?>
			<div class="container">
				<section id="section1">
					<article class="text-center hidden-xs" id="sec" >
						<div style="position:relative;border:1px solid black;">
							<a id="lienArticle" href="http://www.fondationface.org/lancement-de-la-fondation-pour-linvestissement-social-et-le-developpement-humain/"><img class="img1" id="img1" src="http://www.fondationface.org/wp-content/uploads/hollande-675x385.jpg"></a>
							<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, </p>
						</div>	
					</article>	
					<article class="text-left" id="articleIndex">	
						<h2 class="h1 text-center"><span id="Fil">FIL       </span> D'ACTUALITE</h2>
						<div class="article1">
							<a href="" class="h4 " id="articleUn">LANCEMENT DE LA FONDATION POUR...</a>
							<p>  Lancement de la fondation pour l’investissement social et le développement humain (FISO), sous l’égide de...</p>
						</div>
						<div class="article1">
							<a href="" class="h4" class="article1"  id="articleDeux">LANCEMENT DU CONCOURS S’ENGAGER POUR...</a>
							<p>Associations, start-ups, entreprises, collectivités, votre projet crée de l’innovation sociale, des emplois et de...</p>
						</div>
						<div class="article1">
							<a href="" class="h4" class="article1"  id="articleTrois">CIVIGAZ, GRAND VAINQUEUR DU CHALLENGE...</a>
							<p>Découvrez le Programme de Service Civique de la Transition énergétique soutenu et récompensé par...</p>
						<div id="article3">
					</article>
				</section>
				<section id="section2" class="text-center">
					<div id="divFacebook" >
						<div>
							<div style="display:flex;justify-content:center;">
								<div style="display:flex;width:50%;">
									<p id="pFacebook" ><i class="fa fa-facebook" id="logoFacebook"></i></p>
									<h2 class="h2 col-md-1">FACEBOOK</h2>
								</div>	
							</div>	
							<div class="fb-page" data-href="https://www.facebook.com/faceterritoirebourbonnais/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-height="300"><blockquote cite="https://www.facebookcom/faceterritoirebourbonnais/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/faceterritoirebourbonnais/">FACE Territoire Bourbonnais</a></blockquote></div>
						</div>
					</div>	
					<div id="divPresse" >
						<div>
							<h2 class="h2">PRESSE</h2>
							<div id="contenuPresse" >

							</div>	
						</div>
					</div>	
				</section>
			</div>	
			<?php include("include/footer.php"); ?>
		</div>			
		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>
