<?php
	session_start();
	if($_SESSION["connexion"] != "se déconnecter"){
		header("location:youShouldNotPass.php");
	}
?>	
<div class= "connexion">
	<h3>Ajout image</h3>
	<form method="POST" target="include/ajoutImage.php">
	    <input type="file" name="Image" id="image" placeholder="Charger une images" onchange="readURL(this);" />
	    <input type="submit" name="submit" value="Enregistrer" />
	</form>    
</div>