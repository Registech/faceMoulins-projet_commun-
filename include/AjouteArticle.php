<?php
	$pomme = $_POST["pomme"];
	$pomme = explode(",", $pomme);
	$imagecode="";
	for($i=0; $i<strlen($pomme[1]); $i++){
		if($pomme[1][$i] != " "){
			$imagecode .= $pomme[1][$i];
		}else
			$imagecode .="+";
	}
	$imagecode.=",";
	for($i=0; $i<strlen($pomme[2]); $i++){
		if($pomme[2][$i] != " "){
			$imagecode .= $pomme[2][$i];
		}else
			$imagecode .="+";
	}
	if(isset($pomme[0]) AND isset($pomme[1]) AND isset($pomme[2])){
		$bdd = new PDO('mysql:host=localhost;dbname=faceMoulins;charset=utf8', 'faceMoulins', 'Mysteria666');
		$req = $bdd->prepare('INSERT INTO Articles SET titre=?, img=?, texte=?');
		$req->execute(array($pomme[0], $imagecode, $pomme[3]));
		$req->closeCursor();
		echo "L'article à bien été créé";
		$req=$bdd->prepare('SELECT * FROM Articles');
		$req->execute();
		while($donnees = $req->fetch()){
			echo '<h1>'.$donnees["titre"].'</h1><br/><br/>';
			echo '<img src="'.$donnees["img"].'" alt="'.$donnees["titre"].'" />';
			echo '<p>'.$donnees["texte"].'</p>';
		}
	}
