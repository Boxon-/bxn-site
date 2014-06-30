<?php
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
	
	//Importation de la classe Mere
	require($root.'/Modele/Site.class.php');
	
	//construction de l'objet singleton $S issue de la classe Site
	$S=Site::getInstance();
	$S->name="ToDoList";
	$S->ROOT = $root;
	$S->URL = $url;
	
	//ajout des chemins detailles
	//chemins serveur :
	$S->addPath("S","Modele",$root.'/Modele/'); 
	$S->addPath("S","Templates",$root.'/Templates/');
	$S->addPath("S","Chapitres",$root.'/Chapitres/');
	//urls :
	$S->addPath("U","Modele",$url.'/Modele/');
	$S->addPath("U","Templates",$url.'/Templates/');
	$S->addPath("U","Chapitres",$url.'/Chapitres/');
	
	//Importation de la classe qui sert de base à toute les autres
	require($S->paths["S"]['Modele'].'Component.class.php');
	
	//Importation du Log
	require($S->paths["S"]['Modele'].'Log.class.php');
	
	//Importation des autres classes
	require($S->paths["S"]['Modele'].'Chapitre.class.php');
	require($S->paths["S"]['Modele'].'Client.class.php');
	require($S->paths["S"]['Modele'].'File.class.php');
	require($S->paths["S"]['Modele'].'Dir.class.php');
	require($S->paths["S"]['Modele'].'HTMLhandler.class.php');
	require($S->paths["S"]['Modele'].'simple_html_dom.php');	
	
	//initialisation de l'objet Site (et activation du log)
	$S->init();
	
	$F=new File("blabla.txt");

?>
