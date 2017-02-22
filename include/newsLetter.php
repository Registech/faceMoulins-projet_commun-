<?php
	if(isset($_POST["email"])){
		$newMail = $_POST["email"];
		echo $newMail;
		$bdd = new PDO('mysql:host=localhost;dbname=faceMoulins;charset=utf8', 'faceMoulins', 'Mysteria666');
		$req=$bdd->prepare('INSERT INTO faceMoulins SET mail = ?');
		$req->execute([$newMail]);
	}

?>