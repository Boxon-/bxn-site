<?php
class Component {
	private $S;
	private $type;
	private $ID;
	private $mapIndex;
	
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
				case "pathFromIndex":
					$this->$property = $value;
				break;
				case "pathFromServer":
					$this->$property = $value;
				break;				
			}
			$this->$property = $value;
		}
	}

}
?>
