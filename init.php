<?php
	//classe mère
	include_once("Site.class.php");	
	
	//construction du site
	$S=new Site('ToDoList');
	$S->init();
	$chapitre = $S->chapitreActuel;
?>
