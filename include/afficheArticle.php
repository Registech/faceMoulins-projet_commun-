<?php
		$bdd=new PDO('mysql:host=localhost;dbname=c2c5aa0474;charset=utf8', 'root', '');
		$req=$bdd->prepare('SELECT * FROM Articles');
		$req->execute();
		echo '<section id="sectionArticle">';
		while($donnees = $req->fetch()){
			echo '<div id="articleAdmin">';
			echo '<h1 class="h1ArticleAdmin">'.$donnees["titre"].'</h1><br/><br/>';
			echo '<img src="'.$donnees["img"].'" alt="'.$donnees["titre"].'" />';
			echo '<p>'.$donnees["texte"].'</p>';
			echo '</div>';
		}
		echo '</section>';