<?php 
	session_start();
	include("include/header.php");?>
	<div class="container">
		<?php 
			$bdd=new PDO();
			
			if(!isset($_GET["article"])){
				$req=$bdd->prepare('SELECT * FROM Articles WHERE publish=?');
				$req->execute(array("yes"));
				echo '<section id="sectionArticle">';
				while($donnees = $req->fetch()){
					echo '<div id="articleAdmin">';
					echo '<h1 class="h1ArticleAdmin">'.$donnees["titre"].'</h1>';
					echo '<a href="article.php?article='.$donnees["id"].'"><img src="'.$donnees["img"].'" alt="'.$donnees["titre"].'" /></a>';
					echo '</div>';
				}	
				$req->closeCursor();
				echo '</section>';
			}else{
				$req=$bdd->prepare('SELECT * FROM Articles WHERE id=?');
				$req->execute(array($_GET["article"]));
				while($donnees = $req->fetch()){
					echo '<div id="article">';
					echo '<h1>'.$donnees["titre"].'</h1><br/><br/>';
					echo '<img src="'.$donnees["img"].'" alt="'.$donnees["titre"].'" />';
					echo '<article>'.$donnees["texte"].'</article>';
				}
			}
		?>
	</div>
	<?php
	include("include/footer.php");?>