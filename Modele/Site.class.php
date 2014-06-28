<?php
include('Chapitre.class.php');
include('Client.class.php');
class Site {

	//variables 
	private $name;
	private $serverName;
	private $serverSoftware;
	private $serverRoot;
	private $ROOT;
	private $chapitreActuel;
	private $client;
	
	//function d�clanch�e � la cr�ation d'un objet Site;
    function __construct($name){
		//nom du site
		$this->name=$name;
    }
	public function init(){
		// recuperation des infos sur le serveur
		$this->serverName = $_SERVER['SERVER_NAME'];
		$this->serverSoftware = $_SERVER['SERVER_SOFTWARE'];
		$this->serverRoot = $_SERVER['DOCUMENT_ROOT'];

		//la valeur Root renvoi l'adresse du site sur le serveur et URL l'adesse pour le navigateur
		if($this->serverName=='localhost'){
			$this->ROOT = $this->serverRoot."ToDoList/";
			$this->URL = "http://".$this->serverName."/ToDoList/";
			
		}else{
			$this->ROOT = $this->serverRoot."/";
			$this->URL = "http://".$this->serverName."/";
		}
		
		//on reccupere la valeur chapitre pass�e potentiellement par GET
		$this->setChapitreFromGET();
		
		//on creer un objet client
		$this->client=$this->add(new Client());	
	}
	//ajouter un objet au site affich� (ex:Chapitre ect...)
	public function add($object){
		if (property_exists($object,"site")) {
		  $object->site=$this;
		}
		return $object;
	}
	
	//GETTER
	public function __get($property) {
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}
	
	//SETTER
	public function __set($property, $value) {
		if (property_exists($this, $property)) {
			switch($property){
				case "name":
					$this->$property = $value;
				break;				
			}
		}
	}
	
	//defini le chapitre actuel par l'URL
	private function setChapitreFromGET(){
		// exemple index.php?chapitre="blog" 
		// on creer un nouvel objet chapitre dont le nom est "blog"
		if(isset($_GET['chapitre'])){
			if($_GET['chapitre']!=""){
				$nomChapitre= htmlspecialchars($_GET['chapitre'], ENT_QUOTES); //on filtre le GET
				$this->chapitreActuel = $this->add(new Chapitre($nomChapitre)); 
			}
		}else{
			// le chapitre actuel par default est "accueil"
			$this->chapitreActuel = $this->add(new Chapitre("accueil")); 		
		}	
		echo ($this->chapitreActuel->name);
	}
	
	//renvoi l'url du chapitre souhaité (marche potentielement en local et en ligne)
	public function generateURLFor($chapitre){
		$url = $this->URL."index.php?chapitre=".$chapitre;
		return $url;
	}
}
?>
