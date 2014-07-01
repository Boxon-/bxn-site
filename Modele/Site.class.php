<?php
class Site {

	//variables 
	private $name;
	private $serverName;
	private $serverSoftware;
	private $serverRoot;
	private $ROOT;
	private $chapitreActuel;
	private $client;
	private static $_instance = null;
	private $generator = 0;
	private $paths = array();
	private $map = array();
	private $Log;
	private $logActivated;
	
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
		
		//on reccupere la valeur chapitre pass�e potentiellement par GET
		$this->setChapitreFromGET();
		
		//on creer un objet client
		$this->client=new Client();	
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
				$filtre= htmlspecialchars($_GET[$variable], ENT_QUOTES); //on filtre le GET
				$variableToSet = $filtre; 
			}
		}
	}
	
	//defini le chapitre actuel par l'URL
	private function setChapitreFromGET(){
		// exemple index.php?chapitre="blog" 
		// on creer un nouvel objet chapitre dont le nom est "blog"
		if(isset($_GET['chapitre'])){
			if($_GET['chapitre']!=""){
				$nomChapitre= htmlspecialchars($_GET['chapitre'], ENT_QUOTES); //on filtre le GET
				$this->chapitreActuel = new Chapitre($nomChapitre); 
			}else{
				// le chapitre actuel par default est "accueil"
				$this->chapitreActuel = new Chapitre("accueil"); 		
			}	
		}else{
			// le chapitre actuel par default est "accueil"
			$this->chapitreActuel = new Chapitre("accueil"); 		
		}	
	}
	
	
	

	public function generateURL($variable,$value){
		$url = $this->URL."index.php?".$variable."=".$value;
		return $url;
	}
	//renvoi l'url du chapitre souhaité (marche potentielement en local et en ligne)
	public function generateURLFor($chapitre){
		$url=$this->generateURL("chapitre",$chapitre);
		return $url;
	}
	
	public function generateSandBoxURLFor($chapitre){
		$url = $this->URL."index.php?sandbox=".$chapitre;
		return $url;
	}
	//on creer le log 
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
		$forbiddenNames=array('index','Templates','Modele','init','<?','<?php','?>','git','bash','.bat','.dll','.exe','rm*','.htaccess');;
		$check=0;
		for ($i=0;$i<count($forbiddenNames);$i++){
			if (strpos($string,$forbiddenNames[$i])==true) {		
				$check++;
			}
		}
		if($check==0){
			$component->blocked=false;
			if($updateLog){
				$component->Log($string.' >>> Ok!','success');
			}
			return true;
		}else{
			$component->blocked=true;
			if($updateLog){
				$component->Log($string.' >>> Not ok!','error');
			}else{
				return true;
			}
			return false;
		}
	}
}
?>
