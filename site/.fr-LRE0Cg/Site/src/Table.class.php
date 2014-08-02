<?php
class Table extends Component {

	//variables 
	private $name;
	private $inputs;
	private $dataBase;
	private $outputs;
	private $feedback;
	private $template;
	private $url;
	private $idCount;

	
    public function __construct($name='new_table',$dataBase=NULL,$updateLog=true) {
		parent::__construct("table");
		$this->name=$name;
		$this->inputs=array();
		$this->feedback=array();
		$this->url = $this->S->paths['S']['data'].$this->name;
		if($updateLog){
			$this->Log("new Table :".$this->name,"event");
		}
		$this->addInput(new Input(false,'id','int'));
		$this->addInput(new Input(false,'timestamp','int'));
		if($dataBase!=NULL){
			$this->dataBase=$dataBase;
		}else{
			
		}
	}
	//getters
	public function getName(){
		return $this->name;
	}
	public function getInputs(){
		return $this->inputs;
	}	
	public function getDirPath(){
		return $this->url;
	}
	//adders
	public function addInputs($inputsArray){
		foreach ($inputsArray as $input){
			$this->addInput($input);
		}
	
	}
	public function addInput($input){
		if($input->isType('input')){
			$this->inputs[$input->getName()]=$input;
		}
	
	}
	public function addPost($post){
			$post->setValue('id',0);
			$post->setValue('timestamp',date("U"));
			$this->createXMLFile($post);
	}

	//creator
	public function create($type){
		switch($type){
			case 'xml':
				$this->createDir();
				$this->createInfoFile();
			break;
			case 'mysql':
			
			break;
		}

	}
	private function createInfoFile(){
		$dom = new DOMDocument('1.0', 'utf-8');
		$root = $dom->createElement('table');
		$root->setAttribute( "name", $this->name);
		$root->setAttribute( "count", 0);
		$dom->appendChild($root);
		$map=$dom->createElement('map');
		$root->appendChild($map);
		$content="";
		foreach($this->inputs as $name => $value){
			$content.=$name."_";
		}
		$inputs=$dom->createElement('inputs',$content);
		$map->appendChild($inputs);

		$infoFile = new XML($this->url."/".$this->name.'.xml');
		$infoFile->setDOM($dom);
		echo $dom->saveXML();
		if(!$infoFile->allreadyExist){	
			$infoFile->createXML();		
		}else{
			$infoFile->writeXML();		
		}
	}
	private function createDir(){
		$dir = new Dir($this->url);
		echo $this->url;
		if(!$dir->allreadyExist){
			if($dir->create()){
				
			}
		}
	}
	

	//generators
	private function generateXML($type,$values){
		$dom = new DOMDocument('1.0', 'utf-8');
		$root = $dom->createElement($type);
		$dom->appendChild($root);
		foreach($this->inputs as $name => $input){
		   $tag = $dom->createElement($name,$values[$name]);
		   $tag->setAttribute( "type", $input->getInputType());
		   $root->appendChild($tag);
		}
		return $dom;
	}
	public function createXMLFile($post){
		$values = $post->getValues();
		$type = $post->getPostType();
		$XMLfile=new XML($this->url."/".$values['timestamp']."_".$values['name'].".xml");
		$XMLfile->setDOM($this->generateXML($type,$values));
		$XMLfile->createXML();
	}
	public function generateInputTag($name){
		if(isset($this->inputs[$name])){
			$input = $this->inputs[$name];
			$output=$input->generateTag();
		}
		return $output;
	}
	public function generateFeedbackTag(){
		foreach ($this->feedback as $name => $f){
			$output.='<div>'.$f.'</div></br>'."\n";
		}
		return $output;
	}
	public function generateFormTag(){
		$output='<form id="form-'.$this->name.'" name="'.$this->name.'" class="form-'.$this->type.'">'."\n";
		$output.='<div id="message_error"></div></br>'."\n";
		foreach ($this->inputs as $name => $input){
			if($input->isOpen()==true){
				$output.="	".$this->generateInputTag($name).'</br>'."\n";
			}
		}
		$output.='</form>'."\n";
		return $output;
	}
	
	//traitement des variables passées via post ;
	private function readPostVariables (){
		$output=array();
		foreach ($this->inputs as $input){
			$name=$input->getName();
			if($input->isOpen()){
				if(isset($_POST[$name])&&$_POST[$name]!=NULL){
					$output[$name]=$this->S->cleanString($_POST[$name]);
				}
			}
		}		
		return $output;
	}
	
	private function checkPostVariables(){
		$this->Log("checking post variables...","process");
		$output=array();
		$postVariables = $this->readPostVariables();
		$errorCount=0;
		foreach ($postVariables as $name => $var){
			if(isset($this->inputs[$name])){
				$this->Log("checking input ".$name."...","process");
				$input = $this->inputs[$name];
				if($var==""){
					$feedback[$name]="champ vide";
					$errorCount++;
					$this->Log("empty feild","error");
				}else if(strlen($var)>$input->getMaxChar){
					$feedback[$name]="ce champ ne peut comporter que ".$input->getMaxChar." caracteres maximum";
					$errorCount++;
					$this->Log(">charMax","error");
				}else if(strlen($var)<=$input->getMinChar){
					$feedback[$name]="ce champ doit comporter au moins ".$input->getMinChar." caracteres ";
					$errorCount++;
					$this->Log("<charMin","error");
				}else{
					$feedback[$name]="champ valide";
					$this->Log("input valid","error");
				}
			}else{
				$this->Log("unknown input : ".$name,"error");
				return false;
			}
		}
		if($errorCount==0){
			$this->Log("all inputs are valid","sucess");
			return true;
		}else{
			$this->Log($errorCount." inputs are nonvalid","error");
			return false;
		}
		
	}
	
	public function getPostVariables(){
		if($this->checkPostVariables()){
			return $this->readPostVariables();
		}
	}

}
?>
