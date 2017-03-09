
			<?php 
		session_start();
		include("include/header.php"); ?>
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
							<?php 
								$bdd=new PDO();
								$req = $bdd->prepare('SELECT * FROM EleveFabrik');
								$req->execute();
								while($data = $req->fetch()){
									echo '<div class="col-xs-6 col-sm-4 col-md-4">';
								      echo '<div class="well well-sm">';
								        echo '<div class="row" id="cadre">';
								          echo '<div class="col-xs-12 col-sm-6 col-md-4">';
								            echo '<img src="'.$data["img"].'" alt="'.$data["nomPrenom"].'"" class="img-rounded img-responsive center-block" />';
								          echo '</div>';
								          echo '<div class=" col-xs-12 col-sm-6 col-md-8">';
								            echo '<h4>'.$data["nomPrenom"].'</h4>';
								              echo '<small>';
								                echo '<cite title="Moulins, france">Moulins, France <i class="glyphicon glyphicon-map-marker"></i>';
								                echo '</cite>';
								              echo '</small>';
								              echo '<a href="mailto:'.$data["mail"].'" ><button type="button" class="btn btn-default boutonMobile">MAIL</button></a> ';
								              echo '<a href="'.$data["gitHub"].'"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>';
								          echo '</div>';
								        echo '</div>';
								      echo '</div>';
								    echo '</div>';
								}
							?>
    					</div>
					</div>
				</div>
			</div>
			<?php include("include/footer.php"); ?>