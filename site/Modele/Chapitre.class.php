<?php
class Chapitre extends Component {
	private $name;
	private $pathFromServer;
	private $pathFromIndex;

    public function __construct($name,$updateLog=true) {
		parent::__construct("chapitre");
		$this->name=$name;
		$this->pathFromIndex=$this->S->paths["U"]["Chapitres"].$this->name."/".$this->name.".php";
		$this->pathFromServer=$this->S->paths["S"]["Chapitres"].$this->name."/".$this->name.".php";
		if($updateLog){
			$this->Log("new Chapitre :".$this->name);
			$this->Log("pathFromIndex :".$this->pathFromIndex);
			$this->Log("pathFromServer :".$this->pathFromServer);
		}
	}
	public function includeChapitre(){
		echo "<!--".$this->pathFromIndex."--></br>"; 
		require($this->pathFromServer);	
	}
	public function getPathFromServer(){
		return $this->pathFromServer;
	}
}
?>
