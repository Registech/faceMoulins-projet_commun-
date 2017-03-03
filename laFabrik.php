
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
								$bdd=new PDO('mysql:host=localhost;dbname=c2c5aa0474;charset=utf8', 'root', '');
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