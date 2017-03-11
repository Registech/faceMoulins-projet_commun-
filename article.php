<?php 
	session_start();
	$bdd=new PDO();
	if(isset($_POST['champs'])){
		$req = $bdd->prepare('UPDATE Articles SET '.$_POST["type"].'=? WHERE id=?');
		$req->execute(array($_POST["champs"], $_POST["id"]));
	}

	include("include/header.php");?>
	<div class="container">
		<?php 
			
			if(!isset($_GET["article"])){
				$req=$bdd->prepare('SELECT * FROM Articles WHERE publish=?');
				$req->execute(array("yes"));
				echo '<section id="sectionArticle">';
				while($donnees = $req->fetch()){
					echo '<div id="articleAdmin">';
					echo '<h1 class="h1ArticleAdmin">'.$donnees["titre"].'</h1>';
					echo '<a href="article.php?article='.$donnees["id"].'"><img src="'.$donnees["img"].'" alt="'.$donnees["titre"].'" /></a>';
					echo '</div>';
				}	
				$req->closeCursor();
				echo '</section>';
			}else{
				$req=$bdd->prepare('SELECT * FROM Articles WHERE id=?');
				$req->execute(array($_GET["article"]));
				while($donnees = $req->fetch()){
					$_SESSION["login"] ? $titre = "<h1 onclick='modif(this, ".$donnees["id"].", \"titre\");'>".$donnees["titre"].'</h1><br/><br/>' :  $titre = '<h1>'.$donnees["titre"].'</h1><br/><br/>';
					$_SESSION["login"] ? $texte = '<article onclick="modif(this, '.$donnees["id"].', \'texte\');">'.$donnees["texte"].'</article>' :  $texte = '<article>'.$donnees["texte"].'</article>';
					echo '<div id="article">';
					echo $titre;
					echo '<img src="'.$donnees["img"].'" alt="'.$donnees["titre"].'" />';
					echo $texte;
				}
			}
			if(!empty($_SESSION["login"])){
				echo '<button class="btn btn-primary" onclick="admin(\'ajoutArt\');">Ajouter un article</button>';
			}
		?>
	</div>
	<script>
		function modif(champs, id, type){
			val = champs.innerHTML;
			champs.removeAttribute("onclick");
			if(type == "titre"){
				champs.innerHTML = "<form action='' method='post'><input type='text' name='champs' placeholder='"+val+"' /><input type='number' name='id' value='"+id+"' style='opacity:0;' /><input type='text' name='type' value='"+type+"' style='opacity:0;' /><input type='submit' style='opacity:0;'/></form>";
			}else if(type=="texte"){
				champs.innerHTML = "<form action='' method='post'><textarea name='champs' placeholder='"+val+"'></textarea><input type='number' name='id' value='"+id+"' style='opacity:0;' /><input type='text' name='type' value='"+type+"' style='opacity:0;' /><input type='submit' style='opacity:0;'/></form>";
			}
		}
	</script>	
	<?php
	include("include/footer.php");?>