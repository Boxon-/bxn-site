<?php
class Client extends Component{
	private $id;
	private $site;
	private $browser;
    function __construct(){
		parent::__construct("client");
		// recuperation des infos sur le navigateur du client
		$this->browser = $_SERVER['HTTP_USER_AGENT'];
    }
	public function getBrowser(){
		echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
		$browser = get_browser(null, true);
		return ($browser);
	}
}
?>
