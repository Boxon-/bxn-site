<?php
class File {

	//variables 
	private $url;
	private $site;
	private $html;
	private $file_handle;
	
    public function __construct($url){
		if ($this->isAllowed($url)) {
			$this->url=$url;
		}
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
			}
		}
	}
	
	
	public function load(){
		if (file_exists($this->url)) {
		
		}else{
			return false;
		}
	}
	public function create(){
		if (!file_exists($this->url)) {
			$this->file_handle = fopen($this->url, 'w') or die("can't open file");
			fwrite($this->file_handle ,"");
			fclose($this->file_handle );		
		}else{
			return false;
		}
	}	
	public function read(){
		if (file_exists($this->url)) {
			$output="";
			$this->file_handle = fopen($this->url, "r")or die("can't open file");;
			while (!feof($this->file_handle)) {
			   $line = fgets($this->file_handle);
			   $output.=$line;
			}
			fclose($this->file_handle);
			return $output;
		}else{
			return false;
		}
	}
	public function write($string,$position){
		if (file_exists($this->url)) {
			$toWrite ="";
			$existing=$this->read();
			switch($position){
				case 'over':
					$toWrite=$string;
				break;
				case 'after':
					$toWrite=$existing.$string;
				break;
				case 'before':
					$toWrite=$string.$existing;
				break;
			}
			$this->file_handle = fopen($this->url, 'w') or die("can't open file");
			fwrite($this->file_handle , $toWrite);
			fclose($this->file_handle );			
		}else{
			return false;
		}
	}	
	public function delete(){
		if (file_exists($this->url)) {
			if ($this->isAllowed($url)) {
				unlink($this->url);
			}
		}else{
			return false;
		}
	}	

	public function buildHTML(){
		$this->html = new HTMLhandler($this->url);
	}
	
	public function isAllowed($string){
		$forbiddenNames=array('index','Templates','Modele','init');;
		$check=0;
		for ($i=0;$i<count($forbiddenNames);$i++){
			if (strpos($string,$forbiddenNames[$i])==true) {		
				$check++;
			}
		}
		if($check==0){
			return true;
		}else{
			return false;
		}
	}

}
?>
