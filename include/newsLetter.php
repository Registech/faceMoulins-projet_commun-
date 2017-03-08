<?php
	if(isset($_POST["email"])){
		$k=0;
		$newMail = $_POST["email"];
		$bdd=new PDO('mysql:host=localhost;dbname=c2c5aa0474;charset=utf8', 'root', '');
		$req=$bdd->prepare('SELECT * FROM Mail');
		$req->execute();
		while($donnee = $req->fetch()){
			if($_POST["email"] == $donnee["mail"]){
				$k++;
			}
		}
		if($k == 0){
			$req=$bdd->prepare('INSERT INTO Mail SET mail=?');
			$req->execute([$newMail]);
			echo 'Votre inscription est effectuée';
		}else{
			echo 'Vous etes déjà inscrit';
		}
		$req->closeCursor();
	}

?>