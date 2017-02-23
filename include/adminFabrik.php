<div class= "connexion">
	<h3>Ajouter photo</h3>
	<form method="POST" target="include/ajoutImage.php">
	    <input type="file" name="Image" id="image" placeholder="charger images" />
	    <input type="submit" name="submit" value="Enregistrer" />
</div>

<div class= "connexion">
	<h3>Ajouter projet</h3>
	<form method="POST" target="include/ajoutProjet.php">
		<input class="admin" type="file" name="fichier" id="fichier" accept="image/*" />
		<input class="admin" type="texte" name="texte" id= "TitreArticle" placeholder="Titre de l'article">
		<textarea class="admin" placeholder="Texte de l'article"></textarea>
		<input class="admin" type="submit" value="Valider" />
	</form>
</div>

<div class= "connexion">
	<h3>Ajouter article</h3>
	<form method="POST" target="include/ajoutArticle.php">
		<input class="admin" type="file" name="fichier" id="fichier" accept="image/*" />
		<input class="admin" type="texte" name="texte" id= "TitreArticle" placeholder="Titre de l'article">
		<textarea class="admin" placeholder="Texte de l'article"></textarea>
		<input class="admin" type="submit" value="Valider" />
	</form>
</div>