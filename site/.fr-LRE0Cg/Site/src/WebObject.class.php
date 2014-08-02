<?php
class WebObject extends Component {
	private $name;
	private $dirPathFromServer;
	private $pathFromServer;
	private $jsDirPathFromServer;
	private $dirPathFromIndex;
	private $pathFromIndex;
	private $jsDirPathFromIndex;

    public function __construct($name,$type,$updateLog=true) {
		$this->name=$name;
		parent::__construct($type);
		
		//chemins navigateur
		$this->dirPathFromIndex=$this->S->paths["U"][$type."s"].$this->name."/";
		$this->pathFromIndex=$this->dirPathFromIndex.$this->name.".php";
		$this->jsDirPathFromIndex=$type."s/".$this->name."/js";
		
		//chemins serveur
		$this->dirPathFromServer=$this->S->paths["S"][$type."s"].$this->name."/";
		$this->pathFromServer=$this->dirPathFromServer.$this->name.".php";
		$this->jsDirPathFromServer=$this->dirPathFromServer."js";
		
		if($updateLog){
			$this->Log("new ".$type." :".$this->nature,"event");
			$this->Log("pathFromIndex :".$this->pathFromIndex,"info");
			$this->Log("pathFromServer :".$this->pathFromServer,"info");
			$this->Log("jsDirPathFromIndex :".$this->jsDirPathFromIndex,"info");
		}
	}

	//getters
	public function getPathFromServer(){
		return $this->pathFromServer;
	}
	public function getPathFromIndex(){
		return $this->pathFromIndex;
	}
	public function getDirPathFromIndex(){
		return $this->dirPathFromIndex;
	}
	public function getDirPathFromServer(){
		return $this->dirPathFromServer;
	}
	public function getJsDirPathFromServer(){
		return $this->dirPathFromServer;
	}
	public function getJsDirPathFromIndex(){
		return $this->jsDirPathFromIndex;
	}
	public function getJsTag(){
		$this->Log("generating Js Tags...","process");
		$jsDir = $this->getJsDirPathFromIndex();
		$output = "";
		if(file_exists($jsDir)){
			$dir = new Dir($jsDir);
			
			foreach ($dir->scan('js') as $file){
				$output.='	<script src="'.$file->getURL().'" type="text/javascript"></script>'."\n";
				$this->Log("script Tag added for ".$file->getURL(),"event");
			}
		}else{
			$this->Log("Js path does not exist : ".$jsDir,"error");
			return false;
		}
		return $output;			
	}
}
?>
