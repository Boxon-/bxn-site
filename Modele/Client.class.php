<?php
class Client {
	private $id;
	private $site;
	private $browser;
    function __construct(){
		// recuperation des infos sur le navigateur du client
		$this->browser = $_SERVER['HTTP_USER_AGENT'];
    }
	public function __get($property) {
		if (property_exists($this, $property)) {
		  return $this->$property;
		}
	}

	public function __set($property, $value) {
		if (property_exists($this, $property)) {
			switch($property){
				case "browser":
					$this->$property = $value;
				break;			
				case "id":
					$this->$property = $value;
				break;					
			}
		}
	}
	public function getBrowser(){
		echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
		$browser = get_browser(null, true);
		return ($browser);
	}
}
?>