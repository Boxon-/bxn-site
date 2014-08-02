<?php
	$articles = new Table("articles");
	$inputs = array();
	$inputs['name']=new Input(true,"name","text");
	$inputs['texte']=new Input(true,"texte","text");
	$inputs['auteur']=new Input(false,"auteur","text");
	$articles->addInputs($inputs);
	$articles->create('xml');
	
	$article = new Post('article',$articles);
	$values = array();
	$values['name']="bonjour";
	$values['auteur']="alexandre Cormier";
	$values['texte']="bliblabliblaiblibalib";

	
	$article->setInputs($inputs);
	$article->setValues($values);
	$articles->addPost($article);
	
	
?>




