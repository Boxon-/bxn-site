<?php
// on reccupere le chapitre passé par GET et on l'affiche dans la div #chapitre
// exemple index.php?chapitre="blog" >>>> affiche Chapitres/blog/blog.php
// le chapitre actuel par default est "accueil"
$chapitreActuel = 'accueil' ; 
if(isset($_GET['chapitre'])){
	if($_GET['chapitre']!=""){
		$chapitreActuel= htmlspecialchars($_GET['chapitre'], ENT_QUOTES); //on filtre le GET
	}
}
?>
