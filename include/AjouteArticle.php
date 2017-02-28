<?php
	$contentArticle = $_POST["contentArticle"];
	$contentArticle = explode(",", $contentArticle);
	$imagecode="";
	$texte="";
	for($i=0; $i<strlen($contentArticle[1]); $i++){
		if($contentArticle[1][$i] != " "){
			$imagecode .= $contentArticle[1][$i];
		}else
			$imagecode .="+";
	}
	$imagecode.=",";
	for($i=0; $i<strlen($contentArticle[2]); $i++){
		if($contentArticle[2][$i] != " "){
			$imagecode .= $contentArticle[2][$i];
		}else
			$imagecode .="+";
	}
	for($i=0;$i<strlen($contentArticle[3]);$i++){
		if($contentArticle[3][$i] == "@" AND $contentArticle[3][$i+1] == ".")
			$texte .= ",";
		elseif($contentArticle[3][$i] == "." AND $contentArticle[3][$i-1] == "@")
			$texte .= " ";
		else
			$texte .= $contentArticle[3][$i];
	}
	if(isset($contentArticle[0]) AND isset($contentArticle[1]) AND isset($contentArticle[2])){
		$bdd=new PDO('mysql:host=localhost;dbname=c2c5aa0474;charset=utf8', 'root', '');
		$req = $bdd->prepare('INSERT INTO Articles SET titre=?, img=?, texte=?');
		$req->execute(array($contentArticle[0], $imagecode, $texte));
		$req->closeCursor();
		echo "L'article à bien été créé";
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
	}
