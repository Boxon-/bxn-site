<?php 
include_once('init.php');
include_once('HEAD.php')?>
	<div id="header"><!--marge superieure--><?php include_once("Templates/header.php");?></div>
	<div id="main">
		<div id="banniere"><!--Templates/banniere.html--><?php include_once('Templates/banniere.html')?></div>
		</br>
		<div id="menuH"><!--Templates/menuH.html--><?php include_once('Templates/menuH.html')?></div>
		</br>
		<div id="chapitre">
			<?php
				echo "<!--Chapitres/".$chapitreActuel."/".$chapitreActuel.".php--></br>"; 
				include_once("Chapitres/".$chapitreActuel."/".$chapitreActuel.".php");
			?>
		</div>
	</div>
	<div id="footer"><!--marge inferieure--><?php include_once("Templates/footer.php");?></div>
	<script>
	// script de la page 
	</script>
<?php include_once('FOOT.php')?>
