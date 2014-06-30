<?php
class Chapitre extends Component {
	private $name;
	private $pathFromServer;
	private $pathFromIndex;
	
	public function __construct($name,$updateLog=true) {
		parent::__construct("chapitre");
		$this->name=$name;
		$this->pathFromIndex=$this->S->paths["U"]["Chapitres"].$this->name."/".$this->name.".php";
		if($updateLog){
			$this->Log("new Chapitre :".$this->name);
			$this->Log("pathFromIndex :".$this->pathFromIndex);
		}
	}
	public function includeChapitre(){
		echo "<!--".$this->pathFromIndex."--></br>"; 
		include_once($this->pathFromIndex);	
	}
}
?>
