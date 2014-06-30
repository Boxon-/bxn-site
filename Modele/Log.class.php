<?php
class Log extends Component {
	private $file;
	private $JsConsole;
	private $listOfAlert;
	private $listOfAlert;

    function __construct($name) {
		parent::__construct("log");
		$url = $this->S->paths['S']['Log'].'Log.txt';
		$this->file =  new File($url);
		$this->listOfAlert = array();
		$this->JsConsole = "";
		$this->updateFile();
		$this->updateJsConsole();
    }
	// ajoute une alerte a listOfAlert
	public function addAlert($alert){
		//$alert doit etre de type string
		if(gettype($alert)=='string'){
			//on ajoute l alerte a la liste
			array_push($this->listOfAlert,$alert)
			$this->Log.=$alert;
			$this->JsConsole.="console.log('".$alert."');";
		}
	}
	// actualise log.txt 
	public function updateFile(){
		$toWrite="";
		foreach($listOfArray as $alert){
			$toWrite.=$alert;
		}
		if($this->file->write($toWrite,'over')){
			return true;
		}
		return false;
	}
	// permet d'afficher le log dans la console js de firefox (necessite de mette "<script> <?php echo $S->Log->getJsConsole();> </script>" dans <head>)
	public function updateJsConsole(){
		$toJsConsole="";
		foreach($listOfArray as $alert){
			$toJsConsole.="console.log('".$alert."');";
		}
		$this->JsConsole = $toJsConsole;
	}
	
	//renvoi la string JsConsole
	public function getJsConsole(){
		return $this->JsConsole = $toJsConsole;
	}
}
?>
