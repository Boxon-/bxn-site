<?php
class Post extends Component {
	//variables 
	private $ID;
	private $inputs;
	private $values;
	private $timestamp;
	private $table;
	private $postType;
	private $template;
	private $xml;
	private $dir;

	
	//consctructeur
    public function __construct($type="post",$table=NULL,$updateLog=true){
		parent::__construct($type);
		$this->postType = $type;
		$this->timestamp = date("U");
		$this->inputs=array();
		$this->values=array();
		if($updateLog){
			$this->Log("new post","event");
		}
		if($table!=NULL){
			$this->table=$table;
		}
    }
	public function getTimeStamp(){
		return $this->timestamp;
	}	
	public function getPostType(){
		return $this->postType;
	}
	public function getValues(){
		return $this->values;
	}
	public function setInputs($i){
		$this->inputs=$i;
	}
	public function setValues($v){
		$this->values=$v;
	}
	public function setValue($i,$v){
		$this->values[$i]=$v;
	}

	
	public function linkToTable($table){
		if($table->isType('table')){
			$this->setInputs($table->getInputs());
		}
	
	}


	

	
	public function displayXML(){
		$XMLfile=new XML($this->dir->getURL()."/".$this->timestamp."_".$this->values['name'].'.xml');
		
	
	
	}

	

}
?>