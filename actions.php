 
	<?php 
		session_start();
		include ('include/header.php'); 
	?>
  

	<main>
	    <div class='container' id='container'>
	        <div class="row">
	            <div class="col-md-10 col col-md-offset-1" id="padding50">
	                <h1 class="titre-h1" id="padding"><span id='presentation-span'><strong>A</strong></span>ctions</h1><hr>
	     <!-- <img src="">      image photoshop Actions_____  -->
	                <div id="action-page" class="text-justify">
	                <!--	<img src="http://www.iccrs.org/_files/images/page_en_construction.jpg">-->
	                	<p>La Fondation Agir contre l'exclusion (Face) s'est implantée en juin 2015 à Moulins, avec la création du club d'entrepreneurs Face Territoire bourbonnais (*). Il vient de boucler une année d'activité complète, présentée en assemblée générale, jeudi, à l'Espé (ex-IUFM) de Moulins.</p>
						<h3><strong>CV vidéo et Fabrique du numérique</strong></h3> 
						<p  id='lettrine-p'><span id="lettrine">F</span>ace se positionne en complément des organismes et associations agissant auprès des demandeurs d'emploi, avec comme philosophie « de rapprocher les entreprises des personnes en difficulté, notamment des jeunes », rappelle son président à Moulins, Didier Luminet.</p>

						<p>La première action engagée par Face territoire bourbonnais suit cette logique : la réalisation de CV vidéo « pour améliorer les chances de taper dans l'œil d'un recruteur, alors que ceux-ci reçoivent aujourd'hui un grand nombre de CV papier et de lettres de motivation, parfois stéréotypées », explique Eric Getenay, directeur opérationnel (en bénévolat de compétence) du club.</p>

						<p>25 personnes ont déjà bénéficié de ce soutien, et Face veut développer largement cette action en 2017, notamment grâce à un partenariat conclu avec Pôle emploi. Face propose également la réalisation de CV inversés, à savoir une communication vidéo d'une entreprise qui cherche à recruter, et présente son activité.</p>
								<iframe class="center-block embed-responsive-item" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Ffaceterritoirebourbonnais%2Fvideos%2F199076643820396%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
							
							<iframe class="center-block" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Ffaceterritoirebourbonnais%2Fvideos%2F199079147153479%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>

							<h3><strong>Création du projet Civigaz</strong></h3> 
							<p  id='lettrine-p'><span id="lettrine">E</span>n 2017, dans le cadre d'un budget porté à 215.000 €, Face Territoire bourbonnais va relayer le dispositif Civigaz, porté par la Fondation nationale. GrDF, l'agence du service civique, Face et le ministère de l'Ecologie s'associent contre la précarité énergétique. « Nous allons employer des jeunes en service civique pour se rendre au domicile de personnes en difficultés, à Moulins et sur tout notre bassin, pour les informer sur les économies d'énergie et la sécurisation du chauffage au gaz », résume Eric Getenay, qui annonce aussi « des réunions d'information ».</p>


							
							<h3><strong>Café d'en Face</strong></h3> 
							<p  id='lettrine-p'><span id="lettrine">U</span>n premier Café d'en face a permis d'engager le dialogue entre le public et des chefs d'entreprises. Un second s'est tenue à l'Inter-mitemps à Moulins, le 15 février. Son thème « Demain, ma vie, mon métier ».</p>

							<iframe class="center-block" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Ffaceterritoirebourbonnais%2Fvideos%2F286357901758936%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe></p>


						<?php 
						//	$facebook_left = '<iframe class="center-block" src="https://www.facebook.com/plugins/video.php?href=';
						//	$facebook_right = '&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>';
						//	$youtube_left = '<iframe width="560" height="315" class="center-block" src="https://www.youtube.com/embed/';
						//	$youtube_right = '" frameborder="0" allowfullscreen></iframe>';
						//	$bdd = new PDO('mysql:host=localhost;dbname=face','root','');
						//	$action = $bdd->query('SELECT * FROM action');
						//	foreach ($action as $value) {
						//		$site = explode('.', $value[3]);
						//		if($site[1] == 'facebook'){
						//			echo "<h3><strong>".$value[1]."</strong></h3>";
						//			echo "<p id='lettrine-p'>".$value[2]."</p>";
						//			echo $facebook_left.$value[3].$facebook_right;
						//		}else if ($site[1] == 'youtube'){
						//			$youtube_embed = explode('=', $site[2]);
						//			echo "<h3><strong>".$value[1]."</strong></h3>";
						//			echo "<p id='lettrine-p'>".$value[2]."</p>";
						//			echo $youtube_left.$youtube_embed[1].$youtube_right;
						//		}
						//	}	
						?>

	                </div>
	            </div> 
	        </div>
	    </div>
	</main>
	 
	<?php include ('include/footer.php'); ?>
