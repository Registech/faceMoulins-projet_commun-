<?php 
	$oldPassword="";
	if(isset($_POST["retour1"])){
		for($i=0;$i<strlen($_POST["retour1"]);$i++){
			$allPass = explode(",", $_POST["retour1"]);
		}
		$bdd=new PDO('mysql:host=localhost;dbname=c2c5aa0474;charset=utf8', 'root', '');
		$req = $bdd->prepare('SELECT * FROM idUsers LIMIT 1');
		$req -> execute();
		while($donnees = $req->fetch()){
			$oldPassword = $donnees["adminPassword"];
		}
		if($oldPassword == $allPass[1]){
			$req2 = $bdd->prepare('UPDATE idUsers SET adminPassword=? LIMIT 1');
			$req2-> execute(array($allPass[0]));
			$req2-> closeCursor();
			echo "Mot de passe changé avec succès !";
		}else{
			echo "Le mot de passe est incorrecte ou les mots de passe ne sont pas identiquent";
		}
	}
?>