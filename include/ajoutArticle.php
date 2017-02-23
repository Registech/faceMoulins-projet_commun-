<?php

	session_start();
	$existe=0;
	if(isset($_FILE["fichier"]["name"])){
		echo $_FILE["fichier"]["name"];
	}
	?>	
<div class= "connexion">
	<h3>Ajouter article</h3>
	<form onsubmit="return false">
		<input class="admin" type="texte" name="texte" id= "TitreArticle" placeholder="Titre de l'article" onfocus="visual();">
		<input class="admin" type="file" name="fichier" id="fichier" accept="image/*" onchange="readURL(this);"/>
		<textarea class="admin" id="paragraphe" placeholder="Texte de l'article" onfocus="visual();"></textarea>
		<input class="admin" type="submit" value="Valider" id="validArticle" onclick="go('article');" />
	</form>
</div>	
<div id="visualisation">
	<h1 id="titre"></h1>
	<img id="image" />
	<p id="paragrapheVisuel"></p>
</div>


	
			

