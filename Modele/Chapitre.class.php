<?php
class Chapitre {
	private $name;
	private $pathFromServer;
	private $pathFromIndex;

    function __construct($name) {
		$this->name=$name;
		$this->pathFromIndex="Chapitres/".$this->name."/".$this->name.".php";
    }
	public function __get($property) {
		if (property_exists($this, $property)) {
		  return $this->$property;
		}
	}

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
		}
	}
	public function includeChapitre(){
		echo "<!--".$this->pathFromIndex."--></br>"; 
		include_once($this->pathFromIndex);	
	}
}
?>
