<?php
class Dir extends Component {

	//variables 
	private $url;
	private $dir_handle;
	private $blocked;
	
	//construction
    public function __construct($url){
		parent::__construct("dir");
		$this->url=$url;
		$this->Log("New Dir : ".$this->url);
		return true;
    }
	
	//GETTERS
	public function getURL(){
		return $this->url;
	}

	//creation du dossier
	public function create($updateLog=true){
		if($this->blocked==false){
			if (!file_exists($this->url)) {
				if ($this->S->isAllowed($this,$this->url,$updateLog)) {
					mkdir($this->url, 0777, true)or die("can't create dir");
					$this->Log($this->url." : Dir created successfuly !!",'success');
					return true;
				}
			}else{
				$this->Log($this->url." : Cannot create dir , dir allready exist !!",'error');
			}
		}
		return false;
	}	
	
	//Lecture du dossier
	public function read($outputType,$updateLog=true){
	$this->Log("Start reading Dir : ".$this->url);
		if (file_exists($this->url)) {
			if ($this->dir_handle = opendir($this->url)or die("can't open dir")) {	
				$output;
				switch($outputType){
					case 'string':
						$output="";
					break;
					case 'array':
						$output=array();
					break;
				}
				while (false !== ($entry = readdir($this->dir_handle))) {
					if ($entry != "." && $entry != ".."&& $entry != ".htaccess"&& $entry != ".git") {
						switch($outputType){
							case 'string':
								$output.="$entry\n";
							break;
							case 'array':
								if($nFile = new File($this->url."/$entry")){;
									array_push($output,$nFile);
								}
							break;
						}
					}
				}
				$this->Log("Dir red successfuly !!",'success');
				closedir($this->dir_handle);
				return $output;
			}
		}
		$this->Log("! Dir do not exist !",'error');
		return false;
	}
	//renommer le dossier (WIP)
	public function rename($newName,$updateLog=true){
		if($this->blocked==false){
			if (file_exists($this->url)) {
				if ($this->S->isAllowed($this,$newName,$updateLog)) {
					return true;
				}
			}
		}
		return false;
	}	
	//supprimmer le dossier	
	public function delete($updateLog=true){
	$this->Log("deleting :".$this->url);
		if($this->blocked==false){
			if (file_exists($this->url)) {
				if ($this->S->isAllowed($this,$this->url,$updateLog)) {
					if (!is_dir($this->url)) {
						rmdir($this->url);
						return true;
					}
				}
			}else{
				$this->Log($this->url." : Cannot delete dir , dir do not exist !!",'error');
			}
		}
		return false;
	}	

}
?>
