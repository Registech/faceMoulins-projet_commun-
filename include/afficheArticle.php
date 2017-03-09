<?php
	session_start();
	if($_SESSION["connexion"] != "se déconnecter"){
		header("location:youShouldNotPass.php");
	}

	$bdd=new PDO();
	if(isset($_GET["del"]) AND isset($_GET["publish"])){
		$req=$bdd->prepare('UPDATE Articles SET publish=? WHERE id=?');
		$req->execute(array("none", $_GET["publish"]));
		header("location:../article.php");
	}
	elseif(isset($_GET["del"])){
		$req=$bdd->prepare('DELETE FROM Articles WHERE id=?');
		$req->execute(array($_GET["del"]));
		header("location:ajoutArticle.php");
	}elseif(isset($_GET["publish"])){
		$req=$bdd->prepare('UPDATE Articles SET publish=? WHERE id=?');
		$req->execute(array("yes", $_GET["publish"]));
		header("location:../article.php");
	}
	$req=$bdd->prepare('SELECT * FROM Articles');
	$req->execute();
	echo '<a href="ajoutArticle.php"> Retour</a>';
	echo '<section id="sectionArticle">';
	while($donnees = $req->fetch()){
		echo '<div id="articleAdmin">';
		echo '<h1 class="h1ArticleAdmin">'.$donnees["titre"].'</h1><br/><br/>';
		echo '<img src="'.$donnees["img"].'" alt="'.$donnees["titre"].'" />';
		echo '<article>'.$donnees["texte"].'</article>';
		echo '<a href="afficheArticle.php?del='.$donnees["id"].'">Supprimer</a> ';
		if($donnees["publish"] == "yes")
			echo '<a href="afficheArticle.php?publish='.$donnees["id"].'&del=true">Ne plus publier</a>';
		else
			echo '<a href="afficheArticle.php?publish='.$donnees["id"].'">Publier</a>';
		echo '</div>';
	}	
	$req->closeCursor();
	echo '</section>';