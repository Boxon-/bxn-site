<?php 
// on reccupere le chapitre voulu et on l'affiche 
$chapitre = 'accueil' ; 
if($_GET['chapitre']&&$_GET['chapitre']!=""){
	$chapitreActuel= htmlspecialchars($_GET['chapitre'], ENT_QUOTES); //on filtre le GET
}
include('Templates/header.php')?>
<body>
	<div id="main">
		<div id="banniere"><?php include('Templates/banniere.html')?></div>
		</br>
		<div id="menuH"><?php include('Templates/menuH.html')?></div>
		</br>
		<div id="chapitre">
		<?php
			echo $chapitreActuel; 
			include("Chapitres/".$chapitreActuel."/".$chapitreActuel.".html");
		?>
		</div>
		</br>
	</div>
<script>
// script de la page 
</script>
</body>
<?php include('Templates/footer.php')?>
