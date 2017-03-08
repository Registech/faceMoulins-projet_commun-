<?php 
	session_start();
	include("include/header.php");?>
	<div class="container">
		<?php 
			$bdd=new PDO();
			$req=$bdd->prepare('SELECT * FROM Articles WHERE publish=?');
			$req->execute(array("yes"));
			
			echo '<section id="sectionArticle">';
			while($donnees = $req->fetch()){
				echo '<div id="articleAdmin">';
				echo '<h1 class="h1ArticleAdmin">'.$donnees["titre"].'</h1><br/><br/>';
				echo '<img src="'.$donnees["img"].'" alt="'.$donnees["titre"].'" />';
				echo '<article>'.$donnees["texte"].'</article>';
				echo '</div>';
			}	
		$req->closeCursor();
		echo '</section>';
		?>
	</div>
	<?php
	include("include/footer.php");