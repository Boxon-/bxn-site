<?php
//-------------------------------------------------------PAGE DE TEST ET D'EXEMPLES-------------------------------------------------------

//------MANIPULATIONS DE DOSSIERS ET DE FICHIERS :

//manipulation de dossiers
//creer une Nouvelle instance de la classe dir (on peut aussi dire creer un nouvel objet Dir)
$Dossier = new Dir('exemples');//new Dir ('url du dossier')
$Dossier->create();//creer le dossier 'exemples' sur le serveur
$url=$Dossier->getURL(); //url du nouveauDossier

//Creation de dossier : 

//creer une Nouvelle instance de la classe File
$FichierTxt = new File($url.'/exemple1.txt'); //new File ('url du dossier')
$FichierTxt->setContent('_____!contenu du fichier!_____'); //on declare son contenu
$FichierTxt->create(); //on creer le fichier sur le serveur

//exemple avec un fichier HTML:
$FichierHtml = new File($url.'/exemple2.html'); 
$FichierHtml ->setContent(
'<html>
<title>Nouvelle Page issue de'.$S->name.'</title>
<body>
	<style>
		.red{
			background-color:red;
		}
	</style>
	<div class="red"><center>nouvelle page html!</center></div>
	<div>vous utilisez le navigateur'.$S->client->getBrowser().'<div>
</body>
</html>');
$FichierHtml ->create(); 

//lecture de fichiers 
$FichierALire= new File($url.'/exemple1.txt');
$output1 = $FichierALire->read();

//ecriture de fichiers
$FichierAEcrire = new File($url.'/biere.html');
$FichierAEcrire->setContent('<p>une biere! </p>'); //on declare son contenu
$FichierAEcrire->create();
$FichierAEcrire->write('<p>__et puis une autre biere!</p>','after',true);//rajoute une autre bière à chaque chargement de la page
$output2=$FichierAEcrire->read();

//Afficher le contenu d'un dossier sous forme de string :
$output3 = $Dossier->read('string'); //renvoi une string

//Afficher le contenu d'un dossier avec une boucle :
//par un tableau par exemple
$output4='<TABLE BORDER="4"> <CAPTION>'.$Dossier->getURL().'</CAPTION>';
//boucle foreach qui parcour le dossier sous forme d'Array : 
foreach($Dossier->read('array') as $fichier){ //on traite chaque fichier via la variable $fichier;
	$output4.='
	<TR>
		<TH>'.$fichier->getName().'</TH><TH>'.$fichier->read().'</TH>
	</TR>';
}
$output4.='</TABLE>';

?>
<style>
	.red{
		background-color:red;
		
	}
	.green{
		background-color:green;
	}
	.blue{
		background-color:green;
	}
</style>
<br>
<p>Creation du fichier -----> <a href="<?php echo $FichierHtml->getURL();?>"><?php echo $FichierHtml->getName();?></a></p>
<p>Affiche le contenu du fichier "exemple1.txt" :</p>
<div id="afficheOutput1" class="red"><center><h2><?php echo $output1; ?></h2><center></div>
<p>ecriture de fichiers :</p>
<div id="afficheOutput2" class="red"><center><h2><?php echo $output2; ?></h2><center></div>
<p>Creation du dossier -----> <a href="<?php echo $Dossier->getURL();?>"><?php echo $Dossier->getURL();?></a></p>
<p>Affichage du contenu d'un dossier sous forme de String:</p>
<div id="afficheOutput3" class="red"><center><h2><?php echo $output3; ?></h2><center></div>
<p>Affichage du contenu d'un dossier sous forme d'Array:</p>
<div id="afficheOutput4" class="red"><center><h2><?php echo $output4; ?></h2><center></div>
