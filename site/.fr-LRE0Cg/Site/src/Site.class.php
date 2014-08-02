<?php
class Site {

	//variables 
	private $name;
	private $serverName;
	private $serverSoftware;
	private $serverRoot;
	private $ROOT;
	private $currentPage;
	private $currentTemplate;
	private $client;
	private static $_instance = null;
	private $generator = 0;
	private $paths = array();
	private $map = array();
	private $Log;
	private $logActivated;
	private $infos;
	
	//function d�clanch�e � la cr�ation d'un objet Site;
    function __construct(){
		$this->paths['S']= array();
		$this->paths['U']= array();
		$this->logActivated=false;

    }
	
	//construction du Singleton (classe qui ne peut avoir qu'une seule instance)
	public static function getInstance() {
		if(is_null(self::$_instance)) {
			self::$_instance = new Site();
		}
		return self::$_instance;
	}
	
	//initialisation des données
	public function init(){
		//on active le log;
		$this->activateLog();
		$this->toLog("initializing Site...","process");
		
		//on reccupere la valeur Template pass�e potentiellement par GET
		$this->setTemplateFromGET();
		
		//on reccupere la valeur Page pass�e potentiellement par GET
		$this->setPageFromGET();
		
		//on creer un objet client
		$this->client=new Client();	
				
		$this->toLog("Site initialized","event");
		

	}

	
	//on incrémente le generator a chaque demande d'ID
	public function generateID(){
		$this->generator++;
		return $this->generator;
	}
	
	//ajout d'un composant au tableau map selon son type 
	public function add($component){
		$case = array($component,$component->ID);
		$mapIndex = 0;
		if(!array_key_exists($component->type,$this->map)){
			//si aucun composant de ce type n'est dans le tableau on creer une nouvelle colonne
			$this->map[$component->type]=array();
			array_push($this->map[$component->type],$case);
			$mapIndex = count($this->map[$component->type]);
		}else{
			array_push($this->map[$component->type],$case);
			$mapIndex = count($this->map[$component->type]);
		}
		//on renvoi son index dans le tableau
		return $mapIndex-1;
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
				case "paths":
					$this->$property = $value;
				break;					
			}
		}
	}
	
	//ajout de chemins
	public function addPath($type,$index,$value){
		$this->paths[$type][$index]=$value;		
	}
	//fonction permettant de lire d'attribuer la valeur d'une variable GET a une autre variable
	private function setFromGET($GETvariable,&$variableToSet){
		if(isset($_GET[$variable])){
			if($_GET[$variable]!=""){
				$filtre= $this->cleanString($_GET[$variable]); //on filtre le GET
				$variableToSet = $filtre; 
			}
		}
	}
	//defini le Template actuel par l'URL
	private function setTemplateFromGET(){
		// exemple index.php?Template="blog" 
		// on creer un nouvel objet Template dont le nom est "blog"
		if(isset($_GET['Template'])){
			if($_GET['Template']!=""){
				$nomTemplate= $this->cleanString($_GET['Template']); //on filtre le GET
				$this->currentTemplate = new Template($nomTemplate); 
			}else{
				// le Template actuel par default est "home"
				$this->currentTemplate = new Template("home"); 		
			}	
		}else{
			// le Template actuel par default est "home"
			$this->currentTemplate = new Template("home"); 		
		}	
	}
	
	//defini le Page actuel par l'URL
	private function setPageFromGET(){
		// exemple index.php?Page="blog" 
		// on creer un nouvel objet Page dont le nom est "blog"
		if(isset($_GET['Page'])){
			if($_GET['Page']!=""){
				$nomPage= $this->cleanString($_GET['Page']); //on filtre le GET
				$this->currentPage = new Page($nomPage); 
			}else{
				// le Page actuel par default est "accueil"
				$this->currentPage = new Page("accueil"); 		
			}	
		}else{
			// le Page actuel par default est "accueil"
			$this->currentPage = new Page("accueil"); 		
		}	
	}
	
	
	//-----------ensemble de fonctions permettant de generer des chemins dans les balises html 
	//--genere des URL avec variables en GET
	public function generateGetURL($variable,$value){
		$url = $this->URL."index.php?".$variable."=".$value;
		return $url;
	}
	// il faudrait faire une fonction qui prend deux arrays en argument mais la flemme
	public function generateDoubleGetURL($variable1,$value1,$variable2,$value2){
		$url = $this->URL."index.php?".$variable1."=".$value1."&".$variable2."=".$value2;
		return $url;
	}
	//renvoi l'url de la Page souhaitée (marche potentielement en local et en ligne)
	public function generateURLFor($Page){
		$url=$this->generateGetURL("Page",$Page);
		return $url;
	}
	//renvoi l'url de la Page souhaitée avec le Template souhaité (marche potentielement en local et en ligne)
	public function generateTemplateURLFor($Page,$Template){
		$url=$this->generateDoubleGetURL("Page",$Page,"Template",$Template);
		return $url;
	}
	//creer des balises script pour tout les fichier js contenus dans le dossier "js"
	public function getJsTag(){
		$this->toLog("generating Js Tags ...","process");
		$jsDir = "js";
		$output = "";
		$jsCount=0;
		if(file_exists($jsDir)){
			$dir = new Dir($jsDir);
			foreach ($dir->scan('js') as $file){
				$output.='	<script src="'.$file->getURL().'" type="text/javascript"></script>'."\n";
				$this->toLog("script Tag added for ".$file->getURL(),"event");
			}
		}else{
			$this->toLog("Js path does not exist : ".$jsDir,"error");
			return false;
		}
		return $output;			
	}
	//creer des balises <script> pour tout les fichiers js contenus dans les dossiers js des templates et pages
	public function generateScriptTags($jsDirURL){	
		$this->toLog("generating script Tags in Index.php ....","process");
		$output=$this->getJsTag().$this->currentTemplate->getJsTag().$this->currentPage->getJsTag();
		$this->toLog("script Tags generated","event");
		return $output;
	}


	//creer le log 
	public function activateLog(){
		$logDir = new Dir('logs');
		$logDir->create();
		$this->addPath("S","Log",$this->ROOT.$logDir->getURL());
		$this->addPath("U","Log",$this->URL.$logDir->getURL());
		$this->Log = new Log();
		$this->logActivated=true;
	}
	//desactive le log , bloque l'ecriture 
	public function desactivateLog(){
		$this->logActivated=false;
	}
	
	//ajoute une alerte au log 
	public function addToLog($alert){
		if($this->logActivated){
			$this->Log->addAlert($alert);
			$this->Log->updateFile();
			$this->Log->updateJsConsole();
		}
		return false;
	}
	
	//on verifi si cela ne risque pas de perturber le fonctionnement du site
	public function isAllowed($component,$string,$updateLog){
		$component->blocked=false;
		$forbiddenNames=array('HEAD.php','FOOT.php','index.php','index.html','Templates','src','init.php','<?php','git','bash','.bat','.dll','.exe','rm*','.htaccess');;
		$check=0;
		for ($i=0;$i<count($forbiddenNames);$i++){
			if (strpos($string,$forbiddenNames[$i])==true) {		
				$check++;
			}
		}
		if($check==0){
			$component->blocked=false;
			if($updateLog){
				$component->Log('"'.$string.'" >>> Ok!','success');
			}
			return true;
		}else{
			$component->blocked=true;
			if($updateLog){
				$component->Log('"'.$string.'" >>> Not ok!','error');
			}else{
				return true;
			}
			return false;
		}
	}
	
	public function toLog($content,$alertType='event'){
		//on ajoute le type du Component au debut de l'alert. ex : file->Log("erreur")  affiche dans le log : "_[file]-->erreur"
		//ca le rend plus cool aussi 
		$coolContent = "_[<b>Site</b>]-->".$content;
		$oAlert = new Alert($coolContent,$alertType,$this->ID,$this->type."_alert");
		//on ajoute l'alerte au log du site
		$this->addToLog($oAlert);
	}
	
	//permet de securiser les inputs utilisateurs
	public function cleanString($string){
		$str = mb_convert_encoding($string, 'UTF-8', 'UTF-8');
		$str = htmlentities($str, ENT_QUOTES, 'UTF-8');
		return $str;
	}
}
?>
