<?php
class HTMLhandler extends Component {

	//variables 
	private $handler;
	
	public function __construct($url){
		parent::__construct("file");
		$this->handler = file_get_html($url);
	}
	public function getElementContent($tag,$id){
		foreach($this->handler->find($tag) as $element)
		if($element->id==$id){
			return $element->plaintext;
		}
	}


}
?>
