<?php
class XML extends File {
	//variables 
	private $DOM;
	private $url;
	private $name;
	private $format;
	private $size;
	private $html;
	private $file_handle;
	private $content;
	private $blocked;
	
	//consctructeur
    public function __construct($url,$updateLog=true){
		parent::__construct($url,$updateLog);
		$this->DOM = new DOMDocument('1.0', 'utf-8');
		//$this->DOM->preserveWhiteSpace = false;
		$this->DOM->formatOutput = true;
		if($updateLog){
			$this->Log("new XML : ".$this->url,"event");
		}
    }
	public function setDOM(&$dom){
		$this->DOM=$dom;		
	}
	public function readDOM(&$dom){
		$str =$this->read();
		$this->DOM->loadXML($str);
	}
	public function getValue($tagName){
		$tag = $this->DOM->getElementsByTagName($tagName);
		return $tag[0]->nodeValue;
	}
	public function checkValue($tagName,$value){
		$tag = $this->DOM->getElementsByTagName($tagName);
		if($tag[0]->nodeValue==$value){
			return true;
		}
		foreach ($tags as $t) {
			echo $t->nodeValue, PHP_EOL;
		}
		return false;
	}
	public function createXML(){
		//$this->DOM->preserveWhiteSpace = false;
		$this->DOM->formatOutput = true;
		$content = $this->DOM->saveXML();
		$this->setContent($content);
		$this->create();
	}
	public function writeXML(){
		$this->DOM->formatOutput = true;
		$content = $this->DOM->saveXML();
		$this->setContent($content);
		$this->write($content,'over',true);
	}
	//getters
	public function getDOM(){
		return $this->DOM;
	}
	

}
?>