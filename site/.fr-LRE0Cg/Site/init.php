<?php
	//Importation de la classe Mere
	require($root.'/src/Site.class.php');
	
	//base de donnee
	//require($root.'dbConfig.php');
	
	//construction de l'objet singleton $S issue de la classe Site
	$S=Site::getInstance();
	$S->name="BOXON";
	$S->ROOT = $root;
	$S->URL = $url;
	
	//ajout des chemins detailles
	//chemins serveur :
	$S->addPath("S","src",$root.'/src/'); 
	$S->addPath("S","templates",$root.'/templates/');
	$S->addPath("S","pages",$root.'/pages/');
	$S->addPath("S","data",$root.'/data/');
	//urls :
	$S->addPath("U","src",$url.'/src/');
	$S->addPath("U","templates",$url.'/templates/');
	$S->addPath("U","pages",$url.'/pages/');
	$S->addPath("U","data",$root.'/data/');
	
	//Importation de la classe qui sert de base à toute les autres
	require($S->paths["S"]['src'].'Component.class.php');
	
	//Importation du Log
	require($S->paths["S"]['src'].'Alert.class.php');
	require($S->paths["S"]['src'].'Log.class.php');

	//function declanchee lors d'une erreur php
	function phpErrorToLog($error){
		$alertPHP = new Alert($error,'error');
		$S->addToLog($alertPHP);
	}

	//Importation des autres classes
	require($S->paths["S"]['src'].'WebObject.class.php');
	require($S->paths["S"]['src'].'DataBase.class.php');
	require($S->paths["S"]['src'].'Page.class.php');
	require($S->paths["S"]['src'].'Template.class.php');
	require($S->paths["S"]['src'].'Client.class.php');
	require($S->paths["S"]['src'].'File.class.php');
	require($S->paths["S"]['src'].'Dir.class.php');
	require($S->paths["S"]['src'].'Input.class.php');
	require($S->paths["S"]['src'].'Form.class.php');
	require($S->paths["S"]['src'].'Table.class.php');
	require($S->paths["S"]['src'].'XML.class.php');
	require($S->paths["S"]['src'].'Post.class.php');
	require($S->paths["S"]['src'].'HTMLhandler.class.php');
	require($S->paths["S"]['src'].'simple_html_dom.php');	
	
	//initialisation de l'objet Site (et activation du log)
	$S->init();
	
	//variables facilement accessibles :
	//template
	$template = $S->currentTemplate;
	$templatePath = $S->currentTemplate->getDirPathFromIndex();
	$templateJsPath = $S->currentTemplate->getDirPathFromServer();
	
	//page
	$page = $S->currentPage;
	//$pagePath = $S->currentPage->getDirPathFromIndex()
	


	/*$con=mysql_connect($user, $server, $password)or die(mysql_error()) ;
	mysql_select_db($dbname)or die(mysql_error()) ;*/

?>
