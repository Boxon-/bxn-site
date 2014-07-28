<?php
	//desactivation des erreurs php
	//error_reporting(0);

	// recuperation des infos sur le serveur
	$serverName = $_SERVER['SERVER_NAME'];
	$serverSoftware = $_SERVER['SERVER_SOFTWARE'];
	$serverRoot = $_SERVER['DOCUMENT_ROOT'];
	$serverSelf = $_SERVER['PHP_SELF'];
	$fileURL=str_replace("index.php","",$serverSelf);

	//la variable root renvoi l'adresse absolue du site sur le serveur et url l'adresse relative pour le navigateur
	$root;
	$url;
	if($serverName=='localhost'){
		$root = dirname(__FILE__);
		$url = "http://".$serverName.'/'.$fileURL;

	}else{
		$root = dirname(__FILE__);
		$url = "http://".$serverName.$fileURL;
	}
	require($root.'/init.php');
	require($root.'/HEAD.php');
?>
	<div id="header"><!--marge superieure--><?php include_once("Templates/header.php");?></div>
	<div id="main">
	<div id="banniere"><!--Templates/banniere.html--><?php include_once('Templates/banniere.html')?></div>
		</br>
		<div id="menuH"><!--Templates/menuH.html--><?php include_once('Templates/menuH.html')?></div>
		</br>
		<div id="chapitre">
			<?php require($S->chapitreActuel->getPathFromServer())?>
		</div>
	</div>
	<div id="footer"><!--marge inferieure--><?php include_once("Templates/footer.php");?></div>
	<script>
	// script de la page
	</script>
<?php require($root.'/FOOT.php')?>
