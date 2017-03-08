<?php
session_start();
	if($_SESSION["connexion"] != "se déconnecter";){
		header("location:youShouldNotPass.php");
	}
?>	
<div class= "connexion" style="display:flex; flex-wrap: wrap;width:100%; height: 500px;">
	<div style="width:33%;margin-bottom: 20px; border:1px solid black;">
		<h3>Ajouter Elève</h3>
		<form onsubmit="return false;">
		    <input type="text" name="nomPrenom" id="nomPrenom" placeholder="Nom de l'élève" />
		    <input type="text" name="profilLinkedIn" id="profilLinkedIn" placeholder="Lien du profil LinkedIn" />
		    <input type="text" name="profilGithub" id="profilGithub" placeholder="Lien du profil Github" />
		    <input type="submit" name="submit" value="Enregistrer" onclick="go('ajoutEleve');" />
		</form>
	</div>
	<div style="width:33%;margin-bottom: 20px; border:1px solid black;">
		<h3>Ajouter photo</h3>
		<form onsubmit="return false;">
		    <input type="file" name="Image" id="image" placeholder="charger images" />
		    <input type="submit" name="submit" value="Enregistrer" />
		</form>
	</div>
	<div style="width:33%;margin-bottom: 20px; border:1px solid black;">
		<h3>Ajouter projet</h3>
		<form onsubmit="return false;">
			<input class="admin" type="file" name="fichier" id="fichier" accept="image/*" />
			<input class="admin" type="texte" name="texte" id= "TitreArticle" placeholder="Titre de l'article">
			<textarea class="admin" placeholder="Texte de l'article"></textarea>
			<input class="admin" type="submit" value="Valider" />
		</form>
	</div>
	<div style="width:33%;margin-bottom: 20px; border:1px solid black;">
		<h3>Ajouter article</h3>
		<form onsubmit="return false;">
			<input class="admin" type="file" name="fichier" id="fichier" accept="image/*" />
			<input class="admin" type="texte" name="texte" id= "TitreArticle" placeholder="Titre de l'article">
			<textarea class="admin" placeholder="Texte de l'article"></textarea>
			<input class="admin" type="submit" value="Valider" />
		</form>
	</div>
</div>

