<?php
	session_start();
	if($_SESSION["connexion"] != "se déconnecter"){
		header("location:youShouldNotPass.php");
	}
?>
<div class= "connexion">
	<h3>Changer le mot de passe administrateur</h3>
	<form onsubmit="return false;">
		<input type="password" name="password" class= "password admin" id="old1" placeholder="Ancien mot de passe" />
		<input type="password"  id="new1" name="password2" class= "password2 admin" placeholder="Nouveau mot de pas" />
		<input type="password" id="new2" name="password3" class="admin" placeholder="répéter le nouveau mot de passe" />
		<button type="submit" class="admin" onclick='go("modifPass");' >Valider</button>
	</form>
</div>
	

