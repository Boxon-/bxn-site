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
	private $paths = array();
	
	//function d�clanch�e � la cr�ation d'un objet Site;
	function __construct(){
		$this->paths['S']= array();
		$this->paths['B']= array();
	
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

		
		//on reccupere la valeur chapitre pass�e potentiellement par GET
		$this->setChapitreFromGET();
		
		//on creer un objet client
		$this->client=new Client();	
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
	
	//renvoi l'url du chapitre souhaité (marche potentielement en local et en ligne)
	public function generateURLFor($chapitre){
		$url = $this->URL."index.php?chapitre=".$chapitre;
		return $url;
	}
}
?>
