<div class= "connexion">
	<h3>Ajouter article</h3>
	<form method="POST" target="include/ajoutArticle.php">
		<input class="admin" type="file" name="fichier" id="fichier" accept="image/*" />
		<input class="admin" type="texte" name="texte" id= "TitreArticle" placeholder="Titre de l'article">
		<textarea class="admin" placeholder="Texte de l'article"></textarea>
		<input class="admin" type="submit" value="Valider" />
	</form>
</div>
