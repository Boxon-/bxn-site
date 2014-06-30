<?php
class File extends Component {

	//variables 
	private $url;
	private $name;
	private $format;
	private $size;
	private $html;
	private $file_handle;
	private $content;
	private $blocked;
	
	//consctructeur
    public function __construct($url){
		parent::__construct("file");
		if ($this->S->isAllowed($this,$url)) {
			if (!file_exists($this->url)) {
				$this->url=$url;
				$this->content="file content";
				$this->size=strlen($this->content);
			}else{
				$this->url=$url;
				$this->read();
				$this->size=filesize($this->url);
			}
			$this->name = $this->extractName($this->url);
			$this->format = $this->extractFormat($this->url);
			$this->Log("New File : ".$this->url);
			return true;
		}else{
			$this->url="";
			return false;

		}
    }
	

	//GETTERS
	public function getURL(){return $this->url;}
	public function getName(){return $this->name;}
	public function getFormat(){return $this->format;}
	public function getContent(){return $this->content;}
	public function getSize(){return $this->size;}
	public function getHTML(){return $this->html;}



	//SETTERS
	//url
	public function setURL($url){
		if($this->isAllowed($url)){
			$this->url=$url;
			return true;
		}
		return false;
	}
	//html
	public function setHTML($htmlDoc){
		if($this->S->isAllowed($this,$htmlDoc)){
			$this->html=$htmlDoc;
			return true;
		}
		return false;
	}
	//content
	public function setContent($content){
		if($this->S->isAllowed($this,$content)){
			$this->content=$content;
			return true;
		}
		return false;
	}

	//extraction du nom du fichier
	public function extractName($url){
		$urlSplit=explode('/',$url);
		$lastSplit = count($urlSplit)-1;
		return $urlSplit[$lastSplit];
	}
	//extraction du format du fichier
	public function extractFormat($url){
		$name=$this->extractName($url);
		$nameSplit=explode('.',$name);
		$lastSplit=count($nameSplit)-1;
		return $nameSplit[$lastSplit];
	}
	//chargement du fichier (WIP)
	public function load(){
		if (file_exists($this->url)) {
		
		}else{
			return false;
		}
	}
	
	//creation du fichier sur le serveur
	public function create(){
		if($this->blocked==false){
			if (!file_exists($this->url)) {
				if($this->url!=""){
					$this->file_handle = fopen($this->url, 'w') or die("can't open file");
					if($this->S->isAllowed($this,$this->content)){
						fwrite($this->file_handle ,$this->content);
						$this->size=strlen($this->content);
						$this->Log($this->url." <--File created successfuly !!");
						return true;
					}
					fclose($this->file_handle );
				}			
			}else{
				$this->Log($this->url."<--Cannot create File , file allready exist !!");
			}
		}
		return false;
	}	
	
	//lecture du fichier , retourne une string
	public function read(){
		$this->Log("Start reading File : ".$this->url);
		if($this->blocked==false){
			if (file_exists($this->url)) {
				$output="";
				$this->file_handle = fopen($this->url, "r")or die("can't open file");;
				while (!feof($this->file_handle)) {
				   $line = fgets($this->file_handle);
				   $output.=$line;
				}
				fclose($this->file_handle);
				$this->updateContent($output);
				$this->Log("File red successfuly !");
				return $output;
			}else{
				$this->Log("! File do not exist !");
			}
		}
		$this->Log("! Cannot read file ! : ".$this->url." file blocked !");
		return false;
	}
	
	// ecriture du fichier (avec securite)
	public function write($string,$position){
		if($this->blocked==false){
			if (file_exists($this->url)) {
				if($this->S->isAllowed($string)){
					$toWrite ="";
					$existing=$this->read();
					switch($position){
						case 'over':
							//ecraser
							$toWrite=$string;
						break;
						case 'after':
							//inserer après
							$toWrite=$existing.$string;
						break;
						case 'before':
							//inserer avant
							$toWrite=$string.$existing;
						break;
					}
					if ($this->S->isAllowed($this,$this->url)) {
						$this->file_handle = fopen($this->url, 'w') or die("can't open file");
						fwrite($this->file_handle , $toWrite);
						fclose($this->file_handle );
						$this->updateContent($toWrite);
						return true;
					}
				}
			}
		}
		return false;
	}	
	private function updateContent($submit){
		if($submit!=$this->content){
			$this->content=$submit;
			$this->size=strlen($this->content);
		}
	}
	//renommer le fichier (WIP)
	public function rename($newName){
		if($this->blocked==false){
			if (file_exists($this->url)) {
				if ($this->isAllowed($newName)) {

				}
			}
		}
		return false;
	}	
	//suppression du fichier (avec securite)
	public function delete(){
		if($this->blocked==false){
			if (file_exists($this->url)) {
				if ($this->S->isAllowed($this,$this->url)) {
					unlink($this->url);
					return true;
				}
			}
		}
		return false;
	}	
	
	//analyse un document html 
	public function buildHTML(){
		if($this->blocked==false){
			$this->html = new HTMLhandler($this->url);
			return true;
		}
		return false;
	}
	


}
?>
