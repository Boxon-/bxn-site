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
		$url = "http://".$serverName.'/'.$fileURL;
	}
	require($root.'/init.php');
	require($root.'/HEAD.php');
?>	<body>

		<div id="site">
			<?php 
				if(file_exists($S->currentTemplate->getPathFromServer())){
					include($S->currentTemplate->getPathFromServer());
				}else{
				
				}
			?>
		</div>
		
	</body>
<?php require($root.'/FOOT.php')?>
