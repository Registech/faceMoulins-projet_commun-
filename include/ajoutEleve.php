<?php
	if(isset($_POST["eleve"])){
		$eleve = explode(",", $_POST["eleve"]);
		$bdd=new PDO('mysql:host=localhost;dbname=c2c5aa0474;charset=utf8', 'root', '');
		$req = $bdd->prepare('INSERT INTO EleveFabrik SET nomPrenom=?, linkedIn=?, gitHub=?');
		$req->execute(array($eleve[0], $eleve[1], $eleve[2]));
		$req->closeCursor();
	}