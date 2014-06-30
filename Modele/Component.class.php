<?php
class Component {
	private $S;
	private $type;
	private $ID;
	private $mapIndex;
	private $blocked;
	private $relatedToLog;
	
	//construction 
    function __construct($type){
		//on trouve le site
		$this->S=Site::getInstance();
		//on defini le type
		$this->type = $type;
		//on genere une nouvelle id
		$this->ID = $this->S->generateID();
		//on ajoute le composant au Site
		$this->mapIndex = $this->S->add($this);
		//par default le composant ne recoit pas de traitement special 
		$this->relatedToLog = false;
		
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
			$this->$property = $value;
		}
	}
	//log, ajoute le type du Component au debut de l'alert;
	public function Log($alert){
		//on ajoute le type du Component au debut de l'alert. ex : file->Log("erreur")  affiche dans le log : "_[file]-->erreur"
		$output = "_[".$this->type."]-->".$alert;
		//on ajoute l'alerte au log du site
		$this->S->addToLog($output);
		echo $alert;
	}

}
?>
