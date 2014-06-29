<?php
class Chapitre extends Component {
	private $name;
	private $pathFromServer;
	private $pathFromIndex;

    function __construct($name) {
		parent::__construct("chapitre");
		$this->name=$name;
		$this->pathFromIndex=$this->S->paths["U"]["Chapitres"].$this->name."/".$this->name.".php";
    }
	public function includeChapitre(){
		echo "<!--".$this->pathFromIndex."--></br>"; 
		include_once($this->pathFromIndex);	
	}
}
?>
